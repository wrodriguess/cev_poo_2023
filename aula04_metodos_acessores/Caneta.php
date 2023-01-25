<?php
class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function __construct($modelo, $cor, $ponta)
    {
        $this->setModelo($modelo);
        $this->setCor($cor);
        $this->setPonta($ponta);
        $this->tampar();
    }

    public function escrever()
    {
        if (!$this->tampada) {
            echo "<p>** Escrevendo **</p>";
        }
    }

    public function rabiscar()
    {
        if (!$this->tampada) {
            echo "<p>** Rabiscando **</p>";
        }
    }

    public function pintar()
    {
        if (!$this->tampada) {
            echo "<p>** Pintando **</p>";
        }
    }

    public function tampar()
    {
        $this->tampada = true;
    }

    public function destampar()
    {
        $this->tampada = false;
    }

    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getCor()
    {
        return $this->cor;
    }
    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function getPonta()
    {
        return $this->ponta;
    }
    public function setPonta($ponta)
    {
        $this->ponta = $ponta;
    }

    public function getCarga()
    {
        return $this->carga;
    }
    public function setCarga($carga)
    {
        $this->carga = $carga;
    }

    public function getTampada()
    {
        return $this->tampada;
    }
    public function setTampada($tampada)
    {
        $this->tampada = $tampada;
    }
}
