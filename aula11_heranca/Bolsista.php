<?php
require_once "Aluno.php";

class Bolsista extends Aluno
{
    private $bolsa;

    public function renovarBolsa()
    {
        echo "<p>Bolsa renovada</p>";
    }

    // Sobrepoem o método pagarMensalidade da classe aluno (polimorfismo)
    public function pagarMensalidade()
    {
        echo "<p>" . ($this->getNome()) . " é bolsista! Bolsista paga com desconto</p>";
    }

    public function getBolsa()
    {
        return $this->bolsa;
    }
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;
    }
}
