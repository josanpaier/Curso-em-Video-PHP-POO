<?php
require_once "Pessoa.php";

class Aluno extends Pessoa {
    private $matricula;
    private $curso;

    //Métodos
    public function pagarMensalidade(){
        echo "<p>Pagando mensalidade do aluno $this->nome</p>";
    }

    //Métodos Especiais
    public function getMatricula() {
        return $this->matricula;        
    }
    public function setMatricula($ma) {
        $this->matricula = $ma;
    }
    public function getCurso() {
        return $this->curso;
    }
    public function setCurso($cu) {
        $this->curso = $cu;
    }
}