<?php
require_once "Aluno.php";

class Tecnico extends Aluno
{
    private $registroProfissional;

    public function praticar()
    {
        echo "<p>" . ($this->getNome()) . " está praticando " . ($this->getCurso()) . "</p>";
    }

    public function getRegistroProfissional()
    {
        return $this->registroProfissional;
    }
    public function setRegistroProfissional($registroProfissional)
    {
        $this->registroProfissional = $registroProfissional;
    }
}
