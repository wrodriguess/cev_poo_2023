<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 - Herança</title>
</head>

<body>
    <pre>
    <?php
    require_once "Aluno.php";
    require_once "Bolsista.php";
    require_once "Professor.php";
    require_once "Tecnico.php";
    require_once "Visitante.php";

    $v1 = new Visitante();
    $v1->setNome("Juvenal");
    $v1->setIdade(30);
    $v1->setSexo("M");
    print_r($v1);

    $a1 = new Aluno();
    $a1->setNome("Pedro");
    $a1->setIdade(16);
    $a1->setSexo("M");
    $a1->setMatricula(1111);
    $a1->setCurso("Informática");
    $a1->pagarMensalidade();
    print_r($a1);

    $p1 = new Professor();
    $p1->setNome("Glauco");
    $p1->setIdade(45);
    $p1->setSexo("M");
    $p1->fazerAniversario();
    $p1->setEspecialidade("Geografia");
    $p1->setSalario(4000);
    $p1->receberAumento(50);
    print_r($p1);

    $b1 = new Bolsista();
    $b1->setNome("Jubileu");
    $b1->setIdade(17);
    $b1->setSexo("M");
    $b1->setMatricula(1112);
    $b1->setBolsa(12.5);
    $b1->setCurso("Administração");
    $b1->pagarMensalidade();
    print_r($b1);

    $t1 = new Tecnico();
    $t1->setNome("Rita");
    $t1->setIdade(25);
    $t1->setSexo("F");
    $t1->fazerAniversario();
    $t1->setMatricula(1113);
    $t1->setCurso("Eventos");
    $t1->pagarMensalidade();
    $t1->setRegistroProfissional(741236548);
    $t1->praticar();
    print_r($t1);
    ?>
</pre>
</body>

</html>