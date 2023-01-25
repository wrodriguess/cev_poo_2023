<?php
require_once "ContaBanco.php";

// Jubileu
$p1 = new ContaBanco();
$p1->abrirConta("CP");
$p1->setDono("Jubileu");
$p1->setNumConta(1111);
$p1->depositar(300);

// Creuza
$p2 = new ContaBanco();
$p2->abrirConta("CC");
$p2->setDono("Creuza");
$p2->setNumConta(2222);
$p2->depositar(500);
$p2->sacar(100);

$p1->pagarMensal();
$p2->pagarMensal();

$p1->fecharConta();
$p1->sacar(430);
$p1->fecharConta();

echo "<pre>";
echo "<h3>" . $p1->getDono() . "</h3>";
print_r($p1);

echo "<h3>" . $p2->getDono() . "</h3>";
print_r($p2);
echo "</pre>";
