<?php
class ContaBanco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct()
    {
        $this->setStatus(false);
        $this->setSaldo(0);
        echo "<p>Conta criada com sucesso!</p>";
    }

    public function abrirConta($tipoConta)
    {
        $this->setTipo($tipoConta);
        $this->setStatus(true);
        $this->setSaldo($this->getSaldo() + ($this->getTipo() == "CC" ? 50 : 150));
    }

    public function fecharConta()
    {
        if ($this->getSaldo() == 0) {
            $this->setStatus(false);
            echo "<p>Conta de " . $this->getDono() . " fechada com sucesso</p>";
        } else {
            echo "<p>Não foi possivel fechar a conta, o saldo deve ser R$0,00 e seu saldo atual é: R$" . $this->getSaldo() . "</p>";
        }
    }

    public function depositar($valorDeposito)
    {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valorDeposito);
            echo "<p>Deposito de R$" . $valorDeposito . " realizado na conta de " . $this->getDono() . "</p>";
        } else {
            echo "<p>Conta fechada, impossivel realizar deposito</p>";
        }
    }

    public function sacar($valorSaque)
    {
        if ($this->getStatus() && $this->getSaldo() >= $valorSaque) {
            $this->setSaldo($this->getSaldo() - $valorSaque);
            echo "<p>Saque de R$" . $valorSaque . " realizado na conta de " . $this->getDono() . "</p>";
        } else if ($this->getStatus() == false) {
            echo "<p>Conta fechada, impossivel realizar saque</p>";
        } else {
            echo "<p>Saldo insulficiente, impossivel realizar saque</p>";
        }
    }

    public function pagarMensal()
    {
        $valorMensalidade = ($this->getTipo() == "CC" ? 12 : 20);
        $this->setSaldo($this->getSaldo() - $valorMensalidade);
        echo "<p>Mensalidade de R$" . $valorMensalidade . " debitada na conta de " . $this->getDono() . "</p>";
    }

    public function getNumConta()
    {
        return $this->numConta;
    }
    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }

    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo)
    {
        if (strtoupper($tipo) == "CC" || strtoupper($tipo) == "CP") {
            $this->tipo = $tipo;
        } else {
            echo "<p>Tipo inválido</p>";
        }
    }

    public function getDono()
    {
        return $this->dono;
    }
    public function setDono($dono)
    {
        $this->dono = $dono;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
}
