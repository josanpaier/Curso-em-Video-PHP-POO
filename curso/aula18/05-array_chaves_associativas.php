<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <pre>
    <?php
        $v = array( "nome" => "Ana",
                    "idade" => 23,
                    "peso" => 65.5);
        $v["fuma"] = false;
        if($v["fuma"] == 1) {
          $v["fuma"] = "sim";
        }
        else {
          $v["fuma"] = "não";
        }
        foreach($v as $campo => $valor) {
          echo "O campo $campo possui o conteúdo $valor <br>";
        }
    ?>
  </pre>
</div>
</body>
</html>
