<?php
session_start();

if(!isset($_SESSION["super_login"]) == 'ribafs@gmail.com')
{
	header("location: ../../../index.php");	
} 

include_once("../header.php");
require_once('../classes/crud.php');

$table = 'users';
$crud = new Crud($pdo,$table);

$totalPages = $crud->totalPages();
?>

<body>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading text-center"><h3><b><?=APP_NAME?></h3></b></div>
        <div class="row">

            <!-- Adicionar registro -->
            <div class="text-left col-md-2 top">
                <a href="insert.php?table=<?=$table?>" class="btn btn-primary pull-left">
                    <span class="glyphicon glyphicon-plus"></span> Adicionar
                </a>
            </div>

            <!-- Form de busca-->
            <div class="col-md-10">
                <form action="search.php" method="get" >
                  <div class="pull-right top">
                  <span class="pull-right">  
                    <label class="control-label" for="palavra" style="padding-right: 5px;">
                      <input type="text" value="" placeholder="Nome ou parte" class="form-control" name="keyword">
                      <input name="table" type="hidden" value="<?=$table?>">
                    </label>
                    <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Busca</button>&nbsp;
                  </span>                 
                  </div>
                </form>
            </div>
	    </div>

        <table class="table table-bordered">
            <thead>  
                <tr>
                <?php
                    $ths = $crud->thFields();
                    foreach($ths as $th){
                        print $th;
                    }
                ?>
                    <th colspan="2" class="text-center">Ação</th>
                </tr>
            </thead>
            <tbody id="pg-results">
            </tbody>
        </table>
        <div class="panel-footer text-center">
            <div class="pagination"></div>
        </div>
    </div>
</div>
<script src="../assets/js/jquery-3.5.0.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.bootpag.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#pg-results").load("fetch_data.php?table=<?=$table?>");
    $(".pagination").bootpag({
        total: <?php echo $totalPages;?>,
        page: 1,
        maxVisible: <?php echo LINKS_PER_PAGE;?>,// páginas da paginação
        leaps: true,
        firstLastUse: true,
        first: 'Primeiro',//←
        last: 'Último',//→
        wrapClass: 'pagination',
        activeClass: 'active',
        disabledClass: 'disabled',
        nextClass: 'next',
        prevClass: 'prev',
        lastClass: 'last',
        firstClass: 'first'
    }).on("page", function(e, page_num){
        //e.preventDefault();
        $("#results").prepend('<div class="loading-indication"><img src="./assets/images/ajax-loader.gif" /> Loading...</div>');
        $("#pg-results").load("fetch_data.php?table=<?=$table?>", {"page": page_num});
    });
});
</script>

<?php include_once("../footer.php"); ?>

