<?php
session_start();
if (isset($_SESSION['login'])){
  echo "Entre. Session3. <a href=session4.php>Session4</a><br>";
  echo "<a href=destruir.php>Drestruir Sessão</a>";
} else {
  echo "Acesso não autenticado!";
}
?>
