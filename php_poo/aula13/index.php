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
        require_once "Lobo.php";
        require_once "Cachorro.php";
        $c = new Cachorro();
        $c->reagirFrase("ola");
        $c->reagirFrase("vai apanhar");
        $c->reagirHoraMin(11, 45);
        $c->reagirHoraMin(21, 0);
        $c->reagirDono(true);
        $c->reagirDono(false);
        $c->reagirIdadePeso(2, 12.5);
        $c->reagirIdadePeso(17, 4.5);
    ?>
    </pre>
    
</body>
</html>