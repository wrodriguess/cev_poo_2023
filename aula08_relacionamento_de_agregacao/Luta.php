<?php
require_once "Lutador.php";

class Luta
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function __construct()
    {
    }

    public function marcarLuta($l1, $l2)
    {
        if ($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2) {
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }

    public function lutar()
    {
        if ($this->getAprovada()) {
            $this->desafiado->status();
            $this->desafiante->status();

            $vencedor = rand(0, 2);

            if ($vencedor == 0) {
                echo "<h1>Empatou!</h1>";
                $this->desafiado->empatarLuta();
                $this->desafiante->empatarLuta();
            } elseif ($vencedor == 1) {
                echo "<h1>" . ($this->desafiado->getNome()) . " ganhou!</h1>";
                $this->desafiado->ganharLuta();
                $this->desafiante->perderLuta();
            } else {
                echo "<h1>" . ($this->desafiante->getNome()) . " ganhou!</h1>";
                $this->desafiado->perderLuta();
                $this->desafiante->ganharLuta();
            }
            echo "<h3>Após a luta</h3>";
            $this->desafiado->status();
            $this->desafiante->status();
        } else {
            echo "<p>Luta não pode acontecer</p>";
        }
    }

    public function getDesafiado()
    {
        return $this->desafiado;
    }
    public function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }
    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;
    }

    public function getRounds()
    {
        return $this->rounds;
    }
    public function setRounds($rounds)
    {
        $this->rounds = $rounds;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }
    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;
    }
}
