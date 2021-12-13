<?php
// Descompactar o arquivo teste.zip para a pasta atual sanitizando a entrada
$file = 'teste.zip';

// get the absolute path to $file
$path = pathinfo(realpath($file), PATHINFO_DIRNAME);

$zip = new ZipArchive;
$res = $zip->open($file);
if ($res === TRUE) {
  // extract it to the path we determined above
//  $zip->extractTo($path);
  $zip->extractTo('extra');
  $zip->close();
  echo "WOOT! $file extracted to $path";
} else {
  echo "Doh! I couldn't open $file";
}

