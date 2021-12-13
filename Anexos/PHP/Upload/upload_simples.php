<html>
<head>
   <title>Basic Upload</title>
</head>
<body>
   <form action="#" method="POST" enctype="multipart/form-data">
      <input type="file" name="fileUpload">
      <input type="submit" value="Enviar">
   </form>
</body>
</html>

<?php
// O diretório 'upload' precisa ter permissão de escrita
   if(isset($_FILES['fileUpload']))
   {
      date_default_timezone_set("America/Fortaleza"); //Definindo timezone padrão

      $ext = strtolower(substr($_FILES['fileUpload']['name'],-4)); //Pegando extensão do arquivo
      $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
      $dir = 'upload/'; //Diretório para uploads

      move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
   }
// https://tableless.com.br/upload-de-arquivos-com-php/
?>

