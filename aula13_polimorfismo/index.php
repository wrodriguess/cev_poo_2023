<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 - Polimorfismo (Parte 2)</title>
</head>

<pre>
<body>
    <?php
    require_once 'Mamifero.php';
    require_once 'Lobo.php';
    require_once 'Cachorro.php';

    $c = new Mamifero();
    echo "<h3>Mamifero</h3>";
    $c->emitirSom();
    print_r($c);

    $l = new Lobo();
    echo "<h3>Lobo</h3>";
    $l->emitirSom();
    print_r($l);

    $k = new Cachorro();
    echo "<h3>Cachorro</h3>";
    $k->emitirSom();

    echo "<h4>ReagirFrase</h4>";
    $k->reagirFrase("Olá"); // Abanar e latir
    $k->reagirFrase("Sai"); // Rosnar

    echo "<h4>ReagirHora</h4>";
    $k->reagirHora(11, 45); //Abanar
    $k->reagirHora(21, 00); //Ignorar

    echo "<h4>ReagirDono</h4>";
    $k->reagirDono(true); // Abanar
    $k->reagirDono(false); // Rosnar e latir

    echo "<h4>ReagirIdadePeso</h4>";
    $k->reagirIdadePeso(2, 12.5); // Latir
    $k->reagirIdadePeso(17, 4.5); // Rosnar

    print_r($k);
    ?>
</body>
</pre>

</html>