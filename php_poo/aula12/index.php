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
    require_once "Mamifero.php";
    require_once "Reptil.php";
    require_once "Peixe.php";
    require_once "Ave.php";
    require_once "Canguru.php";
    require_once "Cachorro.php";

    // $n = new Animal(); Classe abstrata não pode ser instanciada
    $m = new Mamifero();
    $r = new Reptil();
    $p = new Peixe();
    $a = new Ave();
    $c = new Canguru();
    $k = new Cachorro();
    
    $m->setPeso(5.7);
    $m->setIdade(8);
    $m->setMembros(4);
    $m->locomover();
    $m->alimentar();
    $m->emitirSom();

    $c->setPeso(55.3);
    $c->setIdade(3);
    $c->setMembros(4);
    $c->locomover();
    $c->alimentar();
    $c->emitirSom();
    $c->usarBolsa();

    $k->setPeso(3.94);
    $k->setIdade(5);
    $k->setMembros(4);
    $k->locomover();
    $k->alimentar();
    $k->emitirSom();
    $k->abanarRabo();

    // $p->setPeso(0.35);
    // $p->setIdade(1);
    // $p->setMembros(0);
    // $p->locomover();
    // $p->alimentar();
    // $p->emitirSom();

    // $a->setPeso(0.89);
    // $a->setIdade(2);
    // $a->setMembros(2);
    // $a->locomover();
    // $a->alimentar();
    // $a->emitirSom();

    print_r($m);
    print_r($c);
    print_r($k);

    ?>
    </pre>
    
</body>
</html>