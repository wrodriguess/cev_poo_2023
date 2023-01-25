<?php
require_once "Controlador.php";

class ControleRemoto implements Controlador
{
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct()
    {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }

    public function ligar()
    {
        $this->setLigado(true);
    }
    public function desligar()
    {
        $this->setLigado(false);
    }
    public function abrirMenu()
    {
        echo "##########  M E N U  ##########";
        echo "<br/>Está ligado: " . ($this->getLigado() ? "SIM" : "NÃO");
        echo "<br/>Está tocando: " . ($this->getTocando() ? "SIM" : "NÃO");
        echo "<br/>Volume: " . ($this->getVolume());
        echo "<br/>##########################";
    }
    public function fecharMenu()
    {
        echo "<p>** Fechando menu **</p>";
    }
    public function maisVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 10);
        }
    }
    public function menosVolume()
    {
        if ($this->getLigado() && $this->getVolume() >= 10) {
            $this->setVolume($this->getVolume() - 10);
        }
    }
    public function ligarMudo()
    {
        if ($this->getLigado()) {
            $this->setVolume(0);
        }
    }
    public function desligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }
    public function play()
    {
        if ($this->getLigado()) {
            $this->setTocando(true);
        }
    }
    public function pause()
    {
        if ($this->getLigado()) {
            $this->setTocando(false);
        }
    }

    private function getVolume()
    {
        return $this->volume;
    }
    private function setVolume($volume)
    {
        $this->volume = $volume;
    }

    private function getLigado()
    {
        return $this->ligado;
    }
    private function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }

    private function getTocando()
    {
        return $this->tocando;
    }
    private function setTocando($tocando)
    {
        $this->tocando = $tocando;
    }
}
