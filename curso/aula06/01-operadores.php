<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <div>
    <?php
        $preco = $_GET["p"];
        echo "O preço do produto é R$ ". number_format($preco, 2);
        // $preco = $preco + ($preco*10/100);
        $preco += $preco*10/100;
        echo "</br>O novo preço do produto com 10% de aumento será R$ ". number_format($preco, 2);
        // $preco -= $preco*10/100;
        // echo "</br>O novo preço do produto com 10% de desconto será R$ $preco";
    ?>
    </div>
</body>
</html>