<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - Polimorfismo (Parte 1)</title>
</head>

<pre>
<body>
    <?php
    require_once 'Animal.php';

    require_once 'Mamifero.php';
    require_once 'Reptil.php';
    require_once 'Peixe.php';
    require_once 'Ave.php';

    require_once 'Canguru.php';
    require_once 'Cachorro.php';
    require_once 'Cobra.php';
    require_once 'Tartaruga.php';
    require_once 'Goldfish.php';
    require_once 'Arara.php';

    // $a = new Animal(); // Erro: classe animal é abstrata
    // print_r($a);

    $m = new Mamifero();
    echo "<h3>Mamifero</h3>";
    $m->setPeso(85.3);
    $m->setIdade(2);
    $m->setMembros(4);
    $m->setCorPelo("Marrom");
    $m->locomover();
    $m->alimentar();
    $m->emitirSom();
    print_r($m);

    $r = new Reptil();
    echo "<h3>Reptil</h3>";
    $r->setPeso(5.85);
    $r->setIdade(6);
    $r->setMembros(0);
    $r->setCorEscama("Verde");
    $r->locomover();
    $r->alimentar();
    $r->emitirSom();
    print_r($r);

    $p = new Peixe();
    echo "<h3>Peixe</h3>";
    $p->setPeso(0.35);
    $p->setIdade(1);
    $p->setMembros(0);
    $p->setCorEscama("Laranja");
    $p->locomover();
    $p->alimentar();
    $p->emitirSom();
    print_r($p);

    $a = new Ave();
    echo "<h3>Ave</h3>";
    $a->setPeso(0.89);
    $a->setIdade(2);
    $a->setMembros(2);
    $a->setCorPena("Azul");
    $a->locomover();
    $a->alimentar();
    $a->emitirSom();
    print_r($a);

    $c = new Canguru();
    echo "<h3>Canguru</h3>";
    $c->setPeso(55.30);
    $c->setIdade(3);
    $c->setMembros(4);
    $c->setCorPelo("Marrom");
    $c->locomover();
    $c->alimentar();
    $c->emitirSom();
    $c->usarBolsa();
    print_r($c);

    $k = new Cachorro();
    echo "<h3>Cachorro</h3>";
    $k->setPeso(85.3);
    $k->setIdade(2);
    $k->setMembros(4);
    $k->setCorPelo("Marrom");
    $k->locomover();
    $k->alimentar();
    $k->emitirSom();
    $k->enterrarOsso();
    $k->abanarRabo();
    print_r($k);
    ?>
</body>
</pre>

</html>