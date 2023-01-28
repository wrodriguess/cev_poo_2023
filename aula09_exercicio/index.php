<?php
require_once "Pessoa.php";
require_once "Livro.php";

echo "<pre>";
$p[0] = new Pessoa("Pedro", 22, "M");
$p[1] = new Pessoa("Maria", 31, "F");

$l[0] = new Livro("PHP Básico", "Jose da Silva", 300, $p[0]);
$l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
$l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);

$l[0]->abrir();
$l[0]->folhear(80);
$l[0]->voltarPag();
$l[0]->detalhes();

print_r($l[0]);
echo "</pre>";
