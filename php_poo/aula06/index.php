<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">    
    <title>Aula 06 - POO</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <pre>
    <?php

use undefined\ControleRemoto;

    require_once 'ControleRemoto.php';
    $c = new ControleRemoto();
    $c->ligar();
    $c->maisVolume();
    $c->abrirMenu();
    ?>
    </pre>
</body>
</html>