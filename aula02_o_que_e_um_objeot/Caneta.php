<?php
class Caneta
{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar()
    {
        $temCargaEEstaDestampada = !$this->tampada && $this->carga > 0;

        if ($temCargaEEstaDestampada) {
            echo "<p>**RABISCANDO**</p>";
        } else {
            echo "<p>[ERRO] Impossivel rabiscar</p>";
        }
    }

    function tampar()
    {
        $this->tampada = true;
    }
}
