<?php
require_once 'Caneta.php';

$c1 = new Caneta();
$c1->modelo = "Bic Cristal";
$c1->cor = "Azul";
// $c1->ponta = 0.5; // ERRO: Não posso acessar um atributo privado
// $c1->carga = 50; // ERRO: Não posso acessar um atributo protegido
// $c1->tampada = true; // ERRO: Não posso acessar um atributo protegido
// $c1->tampar();
$c1->tampar();
$c1->escrever();
$c1->rabiscar();
$c1->pintar();

$c1->destampar();
$c1->escrever();
$c1->rabiscar();
$c1->pintar();

echo "<pre>";
print_r($c1);
echo "</pre>";
