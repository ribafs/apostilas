<?php
session_start();
if (isset($_SESSION['login'])){
	echo "Entre. Session4. <a href=session5.php>Session5</a>";
} else {
	echo "Acesso não autenticado!";
}
?>
