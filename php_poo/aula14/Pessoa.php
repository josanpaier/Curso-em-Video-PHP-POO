<?php

abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }
    
    protected function ganharExp($n) {
        $this->experiencia += $n;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }
    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($sexo): self
    {
        $this->sexo = $sexo;

        return $this;
    }
    public function getExperiencia()
    {
        return $this->experiencia;
    }
    public function setExperiencia($experiencia): self
    {
        $this->experiencia = $experiencia;

        return $this;
    }
}