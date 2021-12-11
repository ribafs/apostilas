<?php
$zip = new ZipArchive;
if ($zip->open('teste.zip') === TRUE) {
    $zip->extractTo('extraidos/');
    $zip->close();
    echo 'ok';
} else {
    echo 'failed';
}
?>


