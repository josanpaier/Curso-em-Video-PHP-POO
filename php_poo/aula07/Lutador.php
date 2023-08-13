<?php

namespace undefined;

class Lutador {
    // Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    //Métodos
    public function apresentar() {
        echo "<p>------------------------</p>";
        echo "CHEGOU A HORA!!! O Lutador: " . $this->getNome();
        echo " veio diretamente de " . $this->getNacionalidade();
        echo ", ele tem " . $this->getIdade() . " anos, pesa " . $this->getPeso() . "kg e ";
        echo $this->getAltura() . "m de altura. ";        
        echo "Ele tem " . $this->getVitorias() . " vitórias, ";
        echo $this->getDerrotas() . " derrotas e ";
        echo $this->getEmpates() . " empates";
    }
    public function status() {
        echo "<p>------------------------</p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo " e já ganhou " . $this->getVitorias() . " vezes, ";
        echo "perdeu " . $this->getDerrotas() . " vezes e";
        echo " empatou " . $this->getEmpates() . " vezes!";
    }
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }

    // Métodos especiais
    public function __construct(
        $no,
        $na,
        $id,
        $al,
        $pe, //setPeso
        /*a cat será definida pelo peso em setPeso(pe)*/
        $vi,
        $de,
        $em
    ) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($no) {
        $this->nome = $no;
    }
    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function setNacionalidade($na) {
        $this->nacionalidade = $na;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($id) {
        $this->idade = $id;
    }
    public function getAltura() {
        return $this->altura;
    }
    public function setAltura($al) {
        $this->altura = $al;
    }    
    public function getPeso() {
        return $this->peso;
    }
    public function setPeso($pe) {
        $this->peso = $pe;
        $this->setCategoria();
    }    
    public function getCategoria() {
        return $this->categoria;
    }
    private function setCategoria() {
        if ($this->getPeso() < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->getPeso() <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->getPeso() <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }
    public function getVitorias() {
        return $this->vitorias;
    }
    public function setVitorias($vi) {
        $this->vitorias = $vi;
    }
    public function getDerrotas() {
        return $this->derrotas;
    }
    public function setDerrotas($de) {
        $this->derrotas = $de;
    }
    public function getEmpates() {
        return $this->empates;
    }
    public function setEmpates($em) {
        $this->empates = $em;
    }
}