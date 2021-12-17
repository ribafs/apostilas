<?php

namespace PHPLib\Classes;

class Compress{

    // Compactar e oferecer para download: $files = array('adminer.php','favicon.ico');  $zipname = 'teste.zip';
    public function zipDownload($files=array(), $zipName){
        $zip = new ZipArchive;
        $zip->open($zipName, ZipArchive::CREATE);
        foreach ($files as $file) {
          $zip->addFile($file);
        }
        $zip->close();

        ///Then download the zipped file.
        header('Content-Type: application/zip');
        header('Content-disposition: attachment; filename='.$zipName);
        header('Content-Length: ' . filesize($zipName));
        readfile($zipName);
    }

    // Commpress a directory recursivelly
    // https://stackoverflow.com/questions/1334613/how-to-recursively-zip-a-directory-in-php/1334949#1334949
    function zipDir($source, $destination)
    {
        if (!extension_loaded('zip') || !file_exists($source)) {
            return false;
        }

        $zip = new ZipArchive();
        if (!$zip->open($destination, ZIPARCHIVE::CREATE)) {
            return false;
        }

        $source = str_replace('\\', '/', realpath($source));

        if (is_dir($source) === true) {
            $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

            foreach ($files as $file)
            {
                $file = str_replace('\\', '/', $file);

                // Ignore "." and ".." folders
                if( in_array(substr($file, strrpos($file, '/')+1), array('.', '..')) )
                    continue;

                $file = realpath($file);

                if (is_dir($file) === true) {
                    $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                } else if (is_file($file) === true) {
                    $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
                }
            }
        } else if (is_file($source) === true) {
            $zip->addFromString(basename($source), file_get_contents($source));
        }

        return $zip->close();
    }

    public function uncompress($file, $dest){
        $zip = new ZipArchive;
        $res = $zip->open($file);
        if ($res === TRUE) {
          $zip->extractTo($dest);
          $zip->close();
          echo 'OK!';
        } else {
          echo 'Erro';
        }
    }
}

$c=new Compress();
$c->uncompress('teste.zip', 't');
//$c->zipDownload($files, $zipname);

//$c->zipDir('/backup/www/CRUD', '/backup/www/teste.zip');

