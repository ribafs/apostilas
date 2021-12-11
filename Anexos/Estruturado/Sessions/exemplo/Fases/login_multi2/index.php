<?php
require_once 'connection.php';

session_start();

if(isset($_SESSION["super_login"]) || isset($_SESSION["admin_login"])  || isset($_SESSION["manager_login"]) || isset($_SESSION["user_login"]))
{
	header("location: admin/index.php");	
}

if(isset($_REQUEST['btn_login']))
{
	$email		=$_REQUEST["email"];
	$password	=$_REQUEST["password"];
		
	if(empty($email)){						
		$errorMsg[]="please enter email";
	}else if(empty($password)){
		$errorMsg[]="please enter password";
	}else if($email AND $password){
		try
		{
            $hash = password_hash($password, PASSWORD_DEFAULT);

			$select_stmt=$db->prepare("SELECT email,password,role FROM users
										WHERE
										email=:uemail");
			$select_stmt->bindParam(":uemail",$email);
			$select_stmt->execute();

			while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))	//fetch record from MySQL database
			{
				$dbemail	=$row["email"];
				$dbpassword	=$row["password"];		//fetchable record store new variable they are "$dbemail","$dbpassword","$dbrole"
				$dbrole		=$row["role"];
			}
			if($email!=null AND $password!=null)	//check taken fields not null after countinue
			{
				if($select_stmt->rowCount()>0)	//check row greater than "0" after continue
				{
					if($email==$dbemail)// AND $password == $dbpassword)
					{
                        if (password_verify($password, $hash)) {
                            // Acesso de acordo com a role do user
						    switch($dbrole)		//role base user login start
						    {
							    case "super":
								    $_SESSION["super_login"]=$email;			//session name is "admin_login"	and store in "$email" variable
								    $loginMsg="Super... Successfully Login...";	//admin login success message
								    header("refresh:3;admin/index.php");	//refresh 3 second after redirect to "admin_home.php" page
								    break;
								    
							    case "admin";
								    $_SESSION["admin_login"]=$email;				//session name is "employee_login" and store in "$email" variable
								    $loginMsg="Admin... Successfully Login...";		//employee login success message
								    header("refresh:3;admin/index.php");	//refresh 3 second after redirect to "employee_home.php" page
								    break;

							    case "manager";
								    $_SESSION["managegr_login"]=$email;				//session name is "employee_login" and store in "$email" variable
								    $loginMsg="Manager... Successfully Login...";		//employee login success message
								    header("refresh:3;admin/index.php");	//refresh 3 second after redirect to "employee_home.php" page
								    break;
								    
							    case "user":
								    $_SESSION["user_login"]=$email;				//session name is "user_login" and store in "$email" variable
								    $loginMsg="User... Successfully Login...";	//user login success message
								    header("refresh:3;admin/index.php");		//refresh 3 second after redirect to "user_home.php" page
								    break;
								    
							    default:
								    $errorMsg[]="wrong email or password switch";
						    }
                        }
					}else{
						$errorMsg[]="wrong email or password - rowcount";
					}
				}
				else
				{
					$errorMsg[]="wrong email or password - email e password";
				}
			}
			else
			{
				$errorMsg[]="wrong email or password";
			}
		}
		catch(PDOException $e)
		{
			$e->getMessage();
		}		
	}
	else
	{
		$errorMsg[]="wrong email or password";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Multi User Role Based Login in PHP with MySQL PDO</title>
		
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

	<body>
	
	<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="https://www.onlyxcodes.com/2018/12/multi-user-role-based-login-in-php-with-mysql-pdo.html">Back to Tutorial</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
	<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
		
		<?php
		if(isset($errorMsg))
		{
			foreach($errorMsg as $error)
			{
			?>
				<div class="alert alert-danger">
					<strong><?php echo $error; ?></strong>
				</div>
            <?php
			}
		}
		if(isset($loginMsg))
		{
		?>
			<div class="alert alert-success">
				<strong>SUCCESS ! <?php echo $loginMsg; ?></strong>
			</div>
        <?php
		}
		?>   
			<center><h2>Login Page</h2></center>
			<form method="post" class="form-horizontal">
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Email</label>
				<div class="col-sm-6">
				<input type="text" name="email" class="form-control" placeholder="enter email" />
				</div>
				</div>
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Password</label>
				<div class="col-sm-6">
				<input type="password" name="password" class="form-control" placeholder="enter passowrd" />
				</div>
				</div>
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit" name="btn_login" class="btn btn-success" value="Login">
				</div>
				</div>
				
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				You don't have a account register here? <a href="register.php"><p class="text-info">Register Account</p></a>		
				</div>
				</div>					
			</form>			
		</div>		
	</div>			
	</div>										
	</body>
</html>
