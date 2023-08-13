<?php

abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;

    //Métodos
    public function fazerAniv() {
        $this->idade ++ ;
    }

    //Métodos Especiais
    public function getNome() {
        return $this->nome;
    }
    public function setNome($no) {
        $this->nome = $no;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($id) {
        $this->idade = $id;
    }
    public function getSexo() {
        return $this->sexo;
    }
    public function setSexo($sx) {
        $this->sexo = $sx;
    }
}