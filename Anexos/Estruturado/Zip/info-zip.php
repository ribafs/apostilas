<?php
// Informações sobre o conteúdo de um arquivo ZIP
$za = new ZipArchive();

$za->open('teste.zip');
print_r($za);
var_dump($za);
echo "numFiles: " . $za->numFiles . "\n<br>";
echo "status: " . $za->status  . "\n<br>";
echo "statusSys: " . $za->statusSys . "\n<br>";
echo "filename: " . $za->filename . "\n<br>";
echo "comment: " . $za->comment . "\n<br>";

for ($i=0; $i<$za->numFiles;$i++) {
    echo "index: $i\n<br>";
    print_r($za->statIndex($i));
}
echo "numFile:" . $za->numFiles . "\n<br>";
?>

