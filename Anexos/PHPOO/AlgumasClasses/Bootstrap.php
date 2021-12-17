<?php

// Twitter BootStrap
class Bootstrap
{
  public static function head($title){
    $head = '';
    $head .= <<<EOD
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>$title</title>
</head>\n

<body>\n
  <div class="container">
EOD;
    return $head;
  }

  public static function jumbotron($title, $text){
        $jt = '';
        $jt .= <<<EOD
        \n
        <div class="jumbotron">
          <h1>$title</h1>
          <p>$text</p>
        </div>
EOD;
        return $jt;
  }

  public static function rowGrid($col = 4){
    $cols = '';
    $cols .= "\n<div class = \"row\">";
    $nr = 12/$col;
    for($x=0;$x<=$nr;$x++){
      $cols .= "\n<div class = \"col-md-$nr\">$x</div>";
    }
    $cols .="\n</div><!-- /row -->";
    return $cols;
  }

  public static function textAlign($text, $align = 'left'){
    $txt = '';
    $txt .= "<div class=\"text-$align\">$text</div>";
    return $txt;
  }

  public static function textColor($text, $color = 'primary'){//muted,primary,success,info,warning, danger,secondary,white,dark,body
    $txt = '';
    $txt .= "<div class=\"text-$color\">$text</div>";
    return $txt;
  }

  public static function bgColor($text, $color = 'danger'){//muted,primary,success,info,warning, danger,secondary,white,dark,body
    $txt = '';
    $txt .= "<div class=\"bg-$color\">$text</div>";
    return $txt;
  }

  public static function imgDisplay($img = 'imagem.png', $alt = 'Minha imagem'){
    $image = '';
    $image .= "<img src=\"$img\" alt=\"$alt\">";
    return $image;
  }

  public static function alert($text, $type = 'danger'){//muted,primary,success,info,warning, danger,secondary,white,dark,body
    $alert = '';
    $alert .= "<div class = \"alert alert-$type\">$text</div>";// Lembre que quem fará a coerência entre a frase e o alert é você
    return $alert;
  }

  public static function button($text, $type = 'danger'){//muted,primary,success,info,warning, danger,secondary,white,dark,body
    $but = '';
    if($type == 'Basic'){
      $but .= "<button class = \"btn\">$text</button>";
    }else{
      $but .= "<button class = \"btn btn-$type\">$text</button>";// Lembre que quem fará a coerência entre a frase e o alert é você
    }
    return $but;
  }

  public static function dropDown($title, $links=[], $texts = []){
    $dd = '';
    $dd .= <<<EOD
 \n<div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    $title
  </button>
  <div class="dropdown-menu">
EOD;
    for($x=0;$x<count($links);$x++){
       $dd .="\n<a class=\"dropdown-item\" href=\"$links[$x]\">$texts[$x]</a>";
    }
    $dd .= "\n</div>\n</div>";
    return $dd;
  }

  public static function modal($title, $header, $body){
    $mod = '';
    $mod .= <<<EOD
<div class="container">
  <h2>$title</h2>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    $title
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">$header</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          $body
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>        
      </div>
    </div>
  </div>  
</div>
EOD;
    return $mod;
  }


  public static function closeBody(){
        $body = '';
        $body .= <<<EOD
        \n
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
      </div><!-- /container -->
    </body>
    </html>
EOD;
    return $body;
  }
}

// Exemplos de uso. Lembre de sempre manter o método closeBody() no final dos métodos usados
print Bootstrap::head('TesteTit');
print Bootstrap::jumbotron('Título', 'Este é o texto');
print Bootstrap::rowGrid();
print Bootstrap::textAlign('Ribamar', 'right');
print Bootstrap::textColor('Ribamar', 'danger');
print Bootstrap::bgColor('Ribamar', 'danger');
print Bootstrap::imgDisplay('favicon.ico', 'fav');
print Bootstrap::alert('Esteja preparado', 'danger');
print Bootstrap::button('OK', 'danger');
print Bootstrap::dropDown('Título',['link1','link2','link3'], ['Link 1','Link 2','Link 3']);
print Bootstrap::modal('Abrir Modal', 'Cabeçalho', 'TExto principal');
print Bootstrap::closeBody();
