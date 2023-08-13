<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
    span.texto {
      color: <?php echo "#FF0000" ?>;
      font-weight: <?php echo "bold" ?>;
    }
    span.nota {
      color: <?php echo "#FF0000" ?>;
      font-weight: <?php echo "bold" ?>;
    }
  </style>
</head>
<body>
<div>
    <?php
        $nota1 = isset($_GET["n1"])?$_GET["n1"]:1;
        $nota2 = isset($_GET["n2"])?$_GET["n2"]:1;
        $media = ($nota1 + $nota2) / 2;        

        if ($media >= 0 && $media < 5) {
          $sit = "REPROVADO";          
        }
        elseif ($media >= 5 && $media < 7) {
          $sit = "RECUPERAÇÃO";          
        }
        else {
          $sit = "APROVADO";
        }
        echo "A média entre <span class='nota'>" . number_format($nota1,1) . "</span> e <span class='nota'>" . number_format($nota2,1) . "</span> é igual a <span class='nota'>" . number_format($media,1) . "</span><br>";
        echo "Situação do aluno: <span class='texto'>$sit</span><br>";        
    ?>
    <a href="exercicio03.html"><button>Voltar</button></a>
</div>
</body>
</html>
 