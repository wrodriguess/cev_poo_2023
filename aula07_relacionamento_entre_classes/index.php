<?php
require_once "Lutador.php";

$l1 = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
$l2 = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
$l3 = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
$l4 = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
$l5 = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
$l6 = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);


echo "<pre>";
$l1->apresentar();
$l2->status();
echo ($l3->getCategoria());
$l1->ganharLuta();

echo "</pre>";
