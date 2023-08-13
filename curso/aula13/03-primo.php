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
      $n = isset($_GET["num"])?$_GET["num"]:1;
      echo "Analisando o número $n ...<br>";
      echo "<br>Valores múltiplos: ";
      $contdiv = 0;
      for ($c = 1; $c <= $n; $c++) {        
        if ($n % $c == 0) {
          $contdiv++;
          echo "$c ";
        }
      }
      if ($contdiv > 2) {
        $r = "NÃO É PRIMO!<br>";
      }
      else {
        $r = "É PRIMO!<br>";
      }      
      echo "<br><br>Total de múltiplos: $contdiv<br>";
      echo "<br>Resultado: $n <span class='foco'>$r</span>";
    ?>
    <br><a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 