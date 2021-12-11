<?php
session_start();
if (isset($_SESSION['login'])){
  session_unset(); // Eliminar todas as variáveis da sessão
  session_destroy(); // Destruir a sessão
  echo "Entre. Sessão Destruida. <a href=session3.php>Session3</a><br>";  
} else {
  echo "Acesso não autenticado!";
}
?>
<br>
<a href="index.php">Index</>
