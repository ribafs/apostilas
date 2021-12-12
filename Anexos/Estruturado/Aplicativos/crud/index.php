<?php
include_once("header.php");
include_once("connect.php");

$stmt = $pdo->prepare("SELECT COUNT(*) FROM clientes");
$stmt->execute();
$rows = $stmt->fetch();

// get total no. of pages
$total_pages = ceil($rows[0]/$row_limit);
?>
<body>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading text-center"><h3><b><?=$title?></h3></b></div>
        <div class="row">

            <!-- Adicionar registro -->
            <div class="text-left col-md-2 top">
                <a href="add.php" class="btn btn-primary pull-left">
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
                    </label>
                    <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Busca</button>&nbsp;
                  </span>                 
                  </div>
                </form>
            </div>
	    </div>

        <table class="table table-bordered table-hover">
            <thead>  
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nome</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Nascimento</th>
                    <th class="text-center">CPF</th>
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
    
<script src="assetc/js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assetc/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assetc/js/jquery.bootpag.min.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {
    $("#pg-results").load("fetch_data.php");
    $(".pagination").bootpag({
        total: <?php echo $total_pages; ?>,
        page: 1,
        maxVisible: <?php echo $max_visible; ?>,// páginas da paginação
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
        $("#results").prepend('<div class="loading-indication"><img src="ajax-loader.gif" /> Loading...</div>');
        $("#pg-results").load("fetch_data.php", {"page": page_num});
    });
});
</script>

<?php include_once("footer.php"); ?>

