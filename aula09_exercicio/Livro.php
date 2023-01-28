<?php
require_once "Publicacao.php";
require_once "Pessoa.php";

class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->setLeitor($leitor);
        $this->setAberto(false);
        $this->setPagAtual(0);
    }

    public function detalhes()
    {
        echo "Livro " . ($this->getTitulo()) . " escrito por " . ($this->getAutor()) . "<br/>";
        echo "Páginas: " . ($this->getTotPaginas()) . "<br/>";
        echo "Sendo lido por " . ($this->leitor->getNome()) . "<br/>";
    }

    public function abrir()
    {
        $this->setAberto(true);
    }

    public function fechar()
    {
        $this->setAberto(false);
    }

    public function folhear($p)
    {
        if ($p >= 0 && $this->getTotPaginas() >= $p) {
            $this->setPagAtual($p);
        }
    }

    public function avancarPag()
    {
        if ($this->getTotPaginas() >=  ($this->getPagAtual() + 1)) {
            $this->setPagAtual($this->getPagAtual() + 1);
        }
    }

    public function voltarPag()
    {
        if ($this->getPagAtual() >= 0) {
            $this->setPagAtual($this->getPagAtual() - 1);
        }
    }

    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getTotPaginas()
    {
        return $this->totPaginas;
    }
    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }

    public function getPagAtual()
    {
        return $this->pagAtual;
    }
    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }

    public function getAberto()
    {
        return $this->aberto;
    }
    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }
}
