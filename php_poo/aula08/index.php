<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php

use undefined\Livro;
use undefined\Pessoa;

    require_once "Pessoa.php";
    require_once "Livro.php";

    $p[0] = new Pessoa("Josan", 39, "Masculino");
    $p[1] = new Pessoa("Cinthya", 39, "Feminino");
    // $p[0]->status();
    // $p[0]->fazerAniver();
    // $p[0]->status();

    $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
    $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
    $l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);
    // $l[0]->detalhes();

    $l[0]->abrir();
    // $l[0]->folhear(80);
    $l[0]->folhear(100);
    // $l[0]->avancarPag();
    // $l[0]->voltarPag();
    $l[0]->detalhes();
    $l[1]->detalhes();
    $l[2]->detalhes();
    // print_r($l[0]);
    ?>
    </pre>
    
</body>
</html>