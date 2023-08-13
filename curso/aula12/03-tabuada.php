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
        $v = isset($_GET["val"])?$_GET["val"]:1;
        echo "<h3>Mostrando a Tabuada de $v<h3>";

        $c = 1;

        do {          
          echo "$v x $c = " . $v*$c."<br>";
          $c++;
        } while ($c <= 10);
    ?>
    <a href="03-tabuada.html">Voltar</a>
</div>
</body>
</html>
 