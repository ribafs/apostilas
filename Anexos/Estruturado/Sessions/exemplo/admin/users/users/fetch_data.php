<?php
include_once("../classes/crud.php");
$table = 'users';
$crud = new Crud($pdo,$table);

if (isset($_POST["page"])) {
    $page_no = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
    if(!is_numeric($page_no))
        die("Error fetching data! Invalid page number!!!");
} else {
    $page_no = 1;
}

// get record starting position
$start = (($page_no-1) * REGS_PER_PAGE);

$crud->fetchData($start);

