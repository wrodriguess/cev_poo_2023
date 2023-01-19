<?php
require_once 'Caneta.php';

$caneta1 = new Caneta();
$caneta1->modelo = "Bic Cristal";
$caneta1->cor = "Azul";
$caneta1->ponta = 0.5;
$caneta1->tampada = false;
$caneta1->carga = 90;
$caneta1->rabiscar();

$caneta2 = new Caneta();
$caneta2->modelo = "Bic Cristla";
$caneta2->cor = "Vermelho";
$caneta2->ponta = 1.0;
$caneta2->tampada = false;
$caneta2->tampar();
$caneta2->carga = 70;
$caneta2->rabiscar();

echo "<pre>";
print_r($caneta1);
print_r($caneta2);
echo "</pre>";
