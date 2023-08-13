<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luminária</title>
</head>
<body>
    <?php

use undefined\Luminaria;

        require_once 'Luminaria.php';
        $l1 = new Luminaria;
        $l1->cor = "Branca";
        $l1->modelo = "Decorlux";
        $l1->potencia = 10.5;        
        $l1->desligar();
        $l1->ligar();
        $l1->acender();
        print_r($l1);
    ?>
</body>
</html>