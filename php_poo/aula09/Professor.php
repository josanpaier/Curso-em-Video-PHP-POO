<?php
require_once "Pessoa.php";


class Professor extends Pessoa {
    private $especialidade;
    private $salario;

    //Método
    public function receberAumento($aumento) {
        $this->salario += $aumento;
    }

    //Métodos Especiais
    public function getEspecialidades() {
        return $this->especialidade;
    }
    public function setEspecialidades($es) {
        $this->especialidade = $es;
    }
    public function getSalario() {
        return $this->salario;
    }
    public function setSalario($sa) {
        $this->salario = $sa;
    }
}