<?php
function unzip_file($file, $destination){
    // create object
    $zip = new ZipArchive() ;
    // open archive
    if ($zip->open($file) !== TRUE) {
        return false;
    }
    // extract contents to destination directory
    $zip->extractTo($destination);
    // close archive
    $zip->close();
        return true;
}

if(unzip_file("teste.zip",'uploads/')){
echo 'zip archive extracted successfully';
}else{
  echo 'zip archive extraction failed';
}

