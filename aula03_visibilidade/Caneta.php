<?php
class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function escrever()
    {
        if ($this->tampada) {
            echo "<p>[ERRO]</p>";
        } else {
            echo "<p>** Escrevendo **</p>";
        }
    }
    public function rabiscar()
    {
        if ($this->tampada) {
            echo "<p>[ERRO]</p>";
        } else {
            echo "<p>** Rabiscando **</p>";
        }
    }
    public function pintar()
    {
        if ($this->tampada) {
            echo "<p>[ERRO]</p>";
        } else {
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
}
