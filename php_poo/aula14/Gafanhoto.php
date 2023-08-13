<?php
require_once "Pessoa.php";

class Gafanhoto extends Pessoa {
    private $login;
    private $totAssistido;

    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }
    
    public function assistirMaisUm () {
        $this->totAssistido ++;
    }
    protected function ganharExp($n) {

    }    

    public function getLogin()
    {
        return $this->login;
    }
    public function setLogin($login): self
    {
        $this->login = $login;

        return $this;
    }
    public function getTotAssistido()
    {
        return $this->totAssistido;
    }
    public function setTotAssistido($totAssistido): self
    {
        $this->totAssistido = $totAssistido;

        return $this;
    }
}