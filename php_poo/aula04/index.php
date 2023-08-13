<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">    
    <title>Aula 04 - POO</title>
</head>
<body>
    <pre>
    <?php

use undefined\Caneta;

        require_once 'Caneta.php';

        $c1 = new Caneta("BIC", "Azul", 0.5);
        $c2 = new Caneta("KKK", "Verde", 1.0);

        print_r($c1);
        print_r($c2);
    ?>
    </pre>
</body>
</html>