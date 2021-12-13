<?php

session_start();
print '<a href="../logout.php">Sair</a><br><br>';
if(isset($_SESSION['super_login']) == 'ribafs@gmail.com' ){
//
}elseif(isset($_SESSION['admin_login']) == 'admin@gmail.com'){
print 'Menu admin';
}elseif(isset($_SESSION['manager_login']) == 'manager@gmail.com'){
print 'Menu manager';
}elseif(isset($_SESSION['user_login']) == 'user@gmail.com'){
print 'Menu user';
}
