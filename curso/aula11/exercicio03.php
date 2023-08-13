<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $ini = isset($_GET["ini"])?$_GET["ini"]:1;
        $fim = isset($_GET["fim"])?$_GET["fim"]:1;
        $inc = isset($_GET["inc"])?$_GET["inc"]:1;
        if ($fim > $ini) {
          $c = $ini;
          while ($c <= $fim) {
            echo "$c &nbsp;";
            $c += $inc;
          }
        }
        else {
          $c = $ini;
          while ($c >= $fim) {
            echo "$c &nbsp;";
            $c -= $inc;
          }
        }        
    ?>
    <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 