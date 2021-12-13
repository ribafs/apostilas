<?php
$zip = new ZipArchive();
$filename = "./test112.zip";

if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
    exit("cannot open <$filename>\n");
}

$zip->addFromString("arquivos/arquivo.txt" . time(), "#1 This is a test string added as testfilephp.txt.\n");
$zip->addFromString("arquivos/zip.txt", "#2 This is a test string added as testfilephp2.txt.\n");
$zip->addFile("arquivos/upload.php","/testfromfile.php");
echo "numfiles: " . $zip->numFiles . "\n";
echo "status:" . $zip->status . "\n";
$zip->close();
?>

