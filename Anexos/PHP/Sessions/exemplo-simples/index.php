<?php
session_start();

if(isset($_SESSION['login'])){
    $login = $_SESSION['login'];
}else{
    $login = '';
}
?>
<center><h1>Trabalhando com SESSION em PHP</h1>
Podemos preservar valores de variáveis enquanto durar uma sessão do browser através do uso de SESSION.<br>
Para isso devemos startar a sessão em cada página que desejamos usar esta variável com<br><br>
sesssion_start();<br><br>
Lembrando que esta função deve vir antes de qualquer comando que mande algo para a tela, caso<br>
o session esteja configurado para usar cookie.<br>
Na primeira página deve ter um formulário com algum campo que devemos usar no session.<br>
Experimente gravar a URL de uma das páginas internas e acessar diretamente (http://localhost/session3)
<br>Primeiro feche todas as seções do browser e depois abra o browser com essa URL.<br>
<br>
Veja que SESSION é muito bom para preservar o valor de variáveis entre páginas de um site numa seção.<br>
Portanto seu uso é muito útil quando pretendemos autenticas os visitantes de todas as as páginas de um site.<BR>
Como também para outros usos em que pretendemos reaproveitar o valor de variáveis (algo como global).<BR>
Acompanhe este exemplo para ver detalhes.<br><br><br>

<form method="post" action="session2.php">
	Login<input type="text" size="8" name="login" value=<?=$login?>><br>
	<input type="submit" value="Enviar">
</form></center>
