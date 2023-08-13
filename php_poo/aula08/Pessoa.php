<?php

namespace undefined;

class Pessoa {
    // Atributos
    private $nome;
    private $idade;
    private $sexo;

    // Métodos especiais
    function getNome() {
        return $this->nome;
    }
    function setNome($no) {
        $this->nome = $no;
    }
    private function getIdade() {
        return $this->idade;
    }
    private function setIdade($id) {
        $this->idade = $id;
    }
    private function getSexo() {
        return $this->sexo;
    }
    private function setSexo($sx) {
        $this->sexo = $sx;
    }
    function __construct($no, $id, $sx) {
        $this->nome = $no;
        $this->idade = $id;
        $this->sexo = $sx;
    }

    // Método Público
    public function fazerAniver() {
        $this->setIdade($this->getIdade() + 1);
    }
    public function status() {
        echo "<p>Foi incluída uma pessoa do sexo " . $this->sexo . " com o nome " . $this->nome . " que possui " . $this->idade . " anos.</p>";
    }
}