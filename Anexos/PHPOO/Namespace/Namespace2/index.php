<?php

namespace RibaFS;

require_once 'vendor/autoload.php';

$file = new Classes\Files();

print $file->fileCountLines('index.php');
