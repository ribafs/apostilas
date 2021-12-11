<?php
session_start();
if (isset($_SESSION['login'])){
	echo "Entre. Session5. <a href=index.php>Index</a><br><br>";
	echo "Informações: <br>ID da Sessão: <b>" . session_id() . 
	"</b><br>Variável mantida pela SuperGlobal \$_SESSION: <b>" . $_SESSION['login'];
} else {
	echo "Acesso não autenticado!";
}
?>
