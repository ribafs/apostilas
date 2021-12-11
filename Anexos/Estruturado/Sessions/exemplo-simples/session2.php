<?php
session_start();
$_SESSION['login']=$_POST['login'];

if (isset($_SESSION['login'])){
	echo "Entre. Session2. <a href=session3.php>Session3</a>";
} else {
	echo "Acesso não autenticado!";
}
?>
