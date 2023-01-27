<?php
class Lutador
{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct(
        $nome,
        $nacionalidade,
        $idade,
        $altura,
        $peso,
        $vitorias,
        $derrotas,
        $empates
    ) {
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);
    }

    public function apresentar()
    {
        echo "<p>########################################</p>";
        echo "<br/>Lutador: " . ($this->getNome());
        echo "<br/>Origem: " . ($this->getNacionalidade());
        echo "<br/>" . ($this->getIdade()) . " Anos";
        echo "<br/>" . ($this->getAltura()) . "M de altura";
        echo "<br/>Pesando: " . ($this->getPeso()) . "Kg";
        echo "<br/>Ganhou: " . ($this->getVitorias());
        echo "<br/>Perdeu: " . ($this->getDerrotas());
        echo "<br/>Empatou: " . ($this->getEmpates());
        echo "<p>########################################</p>";
    }

    public function status()
    {
        echo $this->getNome();
        echo "É um peso " . ($this->getCategoria());
        echo " com: " . ($this->getVitorias()) . " vitórias";
        echo " - " . ($this->getDerrotas()) . " derrotas";
        echo " - " . ($this->getEmpates()) . " empates";
    }

    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria($peso);
    }

    public function getCategoria()
    {
        return $this->categoria;
    }
    public function setCategoria()
    {
        if ($this->getPeso() < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->getPeso() < 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->getPeso() < 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->getPeso() <= 120) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }
    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }

    public function getEmpates()
    {
        return $this->empates;
    }
    public function setEmpates($empates)
    {
        $this->empates = $empates;
    }
}
