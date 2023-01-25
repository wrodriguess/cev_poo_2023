<?php
require_once 'Caneta.php';

$c1 = new Caneta("Bic", "Preto", 1.5);


echo "<pre>";
print_r($c1);
print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
echo "</pre>";
