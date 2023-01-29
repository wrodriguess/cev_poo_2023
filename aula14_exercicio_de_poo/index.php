<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 - Projeto final</title>
</head>

<body>
    <pre>
        <?php
        require_once "Video.php";
        require_once "Pessoa.php";
        require_once "Gafanhoto.php";

        $v[0] = new Video("Aula 1 - POO");
        $v[1] = new Video("Aula 12 - PHP");
        $v[3] = new Video("Aula 15 - HTML 5");
        echo "<h3>Vídeos</h3>";
        print_r($v);

        // $p = new Pessoa("Jubileu", 22, "M"); // Cannot instantiate abstract class Pessoa
        // print_r($p);

        $g[0] = new Gafanhoto("Jubileu", 22, "M", "Juba");
        $g[1] = new Gafanhoto("Creuza", 12, "F", "Creuzita");
        echo "<h3>Gafanhotos</h3>";
        print_r($g);
        ?>
    </pre>
</body>

</html>