<?php

require_once "connection.php";

if(isset($_REQUEST['btn_register'])) //check button name "btn_register" and set this
{
	$username	= $_POST['username'];	//textbox name "txt_username"
	$email		= $_POST['email'];	//textbox name "txt_email"
	$password	= $_POST['password'];	//textbox name "txt_password"
	$role		  = $_POST['role'];	//select option name "txt_role"
	$enabled	= $_POST['enabled'];
		
	if(empty($username)){
		$errorMsg[]="Please enter username";	//check username textbox not empty or null
	}else if(empty($email)){
		$errorMsg[]="Please enter email";	//check email textbox not empty or null
	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errorMsg[]="Please enter a valid email address";	//check proper email format 
	}else if(empty($password)){
		$errorMsg[]="Please enter password";	//check passowrd textbox not empty or null
	}else if(strlen($password) < 6){
		$errorMsg[] = "Password must be atleast 6 characters";	//check passowrd must be 6 characters
	}else if(empty($role)){
		$errorMsg[]="Please select role";	//check not select role 
	}else{	
		try
		{	
			$select_stmt = $db->prepare("SELECT username, email FROM users WHERE username=:uname OR email=:uemail");
			$select_stmt->bindParam(":uname",$username);   
			$select_stmt->bindParam(":uemail",$email);      //bind parameters
			$select_stmt->execute();
			$row=$select_stmt->fetch(PDO::FETCH_ASSOC);	//execute query and fetch record store in "$row" variable
			
			if($row["username"]==$username){
				$errorMsg[]="Sorry username already exists";	//check new user type username already exists or not in username textbox
			}else if($row["email"]==$email){
				$errorMsg[]="Sorry email already exists";	//check new user type email already exists or not in email textbox
			}else if(!isset($errorMsg)){
                $hash = password_hash($password, PASSWORD_DEFAULT);
				$insert_stmt=$db->prepare("INSERT INTO users(username,email,password,role,enabled) VALUES(:uname,:uemail,:upassword,:urole,:uenabled)"); 
				$insert_stmt->bindParam(":uname",$username);	
				$insert_stmt->bindParam(":uemail",$email);	  		//bind all parameter 
				$insert_stmt->bindParam(":upassword",$hash);
				$insert_stmt->bindParam(":urole",$role);
				$insert_stmt->bindParam(":uenabled",$enabled, PDO::PARAM_BOOL);
				
				if($insert_stmt->execute())
				{
					$registerMsg="Register Successfully.....Wait Login page"; //execute query success message
					header("refresh:4;index.php"); //refresh 4 second and redirect to index.php page
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
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
					<strong>WRONG ! <?php echo $error; ?></strong>
				</div>
            <?php
			}
		}
		if(isset($registerMsg))
		{
		?>
			<div class="alert alert-success">
				<strong>SUCCESS ! <?php echo $registerMsg; ?></strong>
			</div>
        <?php
		}
		?>   
			<center><h2>Register Page</h2></center>
			<form method="post" class="form-horizontal">
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Userame</label>
				<div class="col-sm-6">
				<input type="text" name="username" class="form-control" placeholder="enter username" />
				</div>
				</div>
				
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
					<label class="col-sm-3 control-label">Select Type</label>
					<div class="col-sm-6">
					<select class="form-control" name="role">
						<option value="" selected="selected"> - select role - </option>
						<option value="super">Super</option>
						<option value="admin">Admin</option>
						<option value="manager">Manager</option>
						<option value="user">User</option>
					</select>
					</div>
				</div>

				<div class="form-group">
				<label class="col-sm-3 control-label">Enabled</label>
				<div class="col-sm-6">
				<input class="text-left" type="checkbox" name="enabled" class="form-control"/>
				</div>
				</div>
				
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit"  name="btn_register" class="btn btn-primary " value="Register">
				<!--<a href="index.php" class="btn btn-danger">Cancel</a>-->
				</div>
				</div>
				
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				You have a account register here? <a href="index.php"><p class="text-info">Login Account</p></a>		
				</div>
				</div>					
			</form>			
		</div>		
	</div>			
	</div>										
	</body>
</html>
