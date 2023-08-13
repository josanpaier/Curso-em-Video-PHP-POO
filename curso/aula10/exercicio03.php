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
        $op = isset($_GET["est"])?$_GET["est"]:0;
        switch ($op) {
          case 1:          
          case 3:
          case 4:
          case 14:
          case 22:
          case 23:
          case 27:
            $regiao = "Região Norte";
            break;
          case 10:          
          case 18:
          case 6:
          case 20:
          case 17:
          case 15:
          case 26:
          case 2:
          case 5:
            $regiao = "Região Nordeste";
            break;
          case 11:          
          case 12:
          case 9:
          case 7:
            $regiao = "Região Centro-Oeste";
            break;
          case 25:          
          case 19:
          case 8:
          case 13:
            $regiao = "Região Sudeste";
            break;
          case 16:          
          case 21:
          case 24:          
            $regiao = "Região Sul";
            break;
          default:
            echo "Estado inválido!";
        }
        echo "Você mora na <span class='foco'>$regiao</span>";
    ?>
    <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 