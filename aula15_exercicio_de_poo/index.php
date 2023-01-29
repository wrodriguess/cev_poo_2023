<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15 - Projeto final</title>
</head>

<body>
    <pre>
        <?php
        require_once "Video.php";
        require_once "Pessoa.php";
        require_once "Gafanhoto.php";
        require_once "Visualizacao.php";

        $v[0] = new Video("Aula 1 - POO");
        $v[1] = new Video("Aula 12 - PHP");
        $v[2] = new Video("Aula 15 - HTML 5");
        echo "<h3>Vídeos</h3>";
        print_r($v);

        // $p = new Pessoa("Jubileu", 22, "M"); // Cannot instantiate abstract class Pessoa
        // print_r($p);

        $g[0] = new Gafanhoto("Jubileu", 22, "M", "Juba");
        $g[1] = new Gafanhoto("Creuza", 12, "F", "Creuzita");
        echo "<h3>Gafanhotos</h3>";
        print_r($g);

        $vis[0] = new Visualizacao($g[0], $v[2]); // Jubileu assiste HTML5
        $vis[1] = new Visualizacao($g[0], $v[1]); // Jubileu assite PHP
        $vis[2] = new Visualizacao($g[1], $v[0]); // Creuza assiste POO
        $vis[4] = new Visualizacao($g[1], $v[1]); // Creuza assite PHP

        $vis[0]->avaliar();
        $vis[1]->avaliarNota(10);
        $vis[4]->avaliarPorc(91);
        echo "<h3>Visualizção</h3>";
        print_r($vis);
        ?>
    </pre>
</body>

</html>