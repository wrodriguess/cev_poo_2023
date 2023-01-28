<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - Herança</title>
</head>

<body>
    <pre>
    <?php
    require_once "Pessoa.php";
    require_once "Aluno.php";
    require_once "Professor.php";
    require_once "Funcionario.php";

    $p1 = new Pessoa();
    $p2 = new Aluno();
    $p3 = new Professor();
    $p4 = new Funcionario();

    $p1->setNome("Pedro");
    $p2->setNome("Maria");
    $p3->setNome("Cláudio");
    $p4->setNome("Fabiana");

    $p2->setCurso("Informática");
    $p3->setSalario(2500.75);
    $p4->setSetor("Estoque");

    // $p1->receberAumento(500); // Erro: receberAumento pertence a classe professor
    $p3->receberAumento(500);

    // $p2->mudarTrabalho(); // Erro: mudarTrabalho pertence a classe funcionário
    $p4->mudarTrabalho();

    // $p4->cancelarMatricula(); // Erro: cancelarMatricula pertence a classe aluno
    $p2->cancelarMatricula();

    echo "<h3>Pessoa</h3>";
    print_r($p1);

    echo "<h3>Aluno</h3>";
    print_r($p2);

    echo "<h3>Professor</h3>";
    print_r($p3);

    echo "<h3>Funcionário</h3>";
    print_r($p4);


    ?>
</pre>
</body>

</html>