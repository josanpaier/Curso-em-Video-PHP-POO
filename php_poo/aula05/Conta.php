<?php

namespace undefined;

class Conta {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct() {
        $this->setStatus(false);        
        $this->setSaldo(0);
        echo "<p>Conta criada com sucesso!</p>";
    }
    
    public function abrirConta($t) {
        $this->setTipo($t);
        // $this->setNumConta($nc);
        // $this->setDono($d);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);
        } elseif ($t =="CP") {
            $this->saldo = 150;
        }
    }
    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p>ERRO! Você possui saldo positivo na sua conta. Para fechar a conta, seu saldo deve estar zerado.</p>";
        } elseif ($this->saldo < 0) {
            echo "<p>ERRO! Você possui saldo negativo na sua conta. Para fechar a conta, seu saldo deve estar zerado.</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta de ".$this->getDono()." fechada com sucesso!</p>";
        }
    }
    public function depositar($d) {
        if /*($this->status == false)*/($this->getStatus() == false) {
            echo "<p>ERRO! Esta conta está fechada. Para depositar, a conta deve estar aberta.</p>";
        } else {
            // $this->saldo += $d;
            $this->setSaldo($this->getSaldo() + $d);
            echo "<p>Depósito de R$ $d na conta de ".$this->getDono()."</p>";
        }        
    }
    public function sacar($saq) {
        if /*($this->status == false)*/ ($this->getStatus() == false) {
            echo "<p>ERRO! Esta conta está fechada. Para sacar, a conta deve estar aberta.</p>";
        } elseif /*($this->saldo <= 0 || $this->saldo < $saq)*/ ($this->getSaldo() <= 0 || $this->getSaldo() < $saq) {
            echo "ERRO! Não há saldo para saque.";
        } else {
            // $this->saldo -= $saq;
            $this->setSaldo($this->getSaldo() - $saq);
            echo "Saque de R$ $saq autorizado na conta da ".$this->getDono()."</p>";
        }
    }
    public function pagarMensal() {
        if /*($this->status == false)*/ ($this->getStatus() == false) {
            echo "<p>ERRO! Esta conta está fechada. Para cobrar mensalidade, a conta deve estar aberta.</p>";
        } elseif /*($this->tipo == "CC")*/ ($this->getTipo() == "CC") {
            // $this->saldo -= 12;
            $this->setSaldo($this->getSaldo() - 12);
            echo "<p>Mensalidade de R$ 12 debitada na conta de ".$this->getDono()."</p>";
        } elseif /*($this->tipo == "CP")*/ ($this->getTipo() == "CP") {
            // $this->saldo -= 20;
            $this->setSaldo($this->getSaldo() - 20);
            echo "<p>Mensalidade de R$ 20 debitada na conta de ".$this->getDono()."</p>";
        }
    }
    public function getNumConta() {
        return $this->numConta;
    }
    public function setNumConta($nc) {
        $this->numConta = $nc;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function setTipo($t) {
        $this->tipo = $t;
    }
    public function getDono() {
        return $this->dono;
    }
    public function setDono($d) {
        $this->dono = $d;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function setSaldo($sal) {
        $this->saldo = $sal;
    }
    public function getStatus() {
        return $this->status;
    }
    public function setStatus($st) {
        $this->status = $st;
    }

}