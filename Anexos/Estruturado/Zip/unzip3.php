<?php 
    // config
    // -------------------------------
    // only file name + .zip
    $zip_filename = "teste.zip";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' >
    <title>Unzip</title>
    <style>
        body{
            font-family: arial, sans-serif;
            word-wrap: break-word;
        }
        .wrapper{
            padding:20px;
            line-height: 1.5;
            font-size: 1rem;
        }
        span{
            font-family: 'Consolas', 'courier new', monospace;
            background: #eee;
            padding:2px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <?php
        echo "Unzipping <span>" .__DIR__. "/" .$zip_filename. "</span> to <span>" .__DIR__. "</span><br>";
        echo "current dir: <span>" . __DIR__ . "</span><br>";
        $zip = new ZipArchive;
        $res = $zip->open(__DIR__ . '/' .$zip_filename);
        if ($res === TRUE) {
//          $zip->extractTo(__DIR__);
          $zip->extractTo('extra');
          $zip->close();
          echo '<p style="color:#00C324;">Extract was successful! Enjoy ;)</p><br>';
        } else {
          echo '<p style="color:red;">Zip file not found!</p><br>';
        }
// End Script.
        ?>
        
    </div>
</body>
</html> 
