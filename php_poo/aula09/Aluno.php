<?php
require_once "Pessoa.php";


class Aluno extends Pessoa {
    private $matricula;
    private $curso;

    //Métodos
    public function cancelarMatr(){
        echo "<p>Matrícula será cancelada...</p>";
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