<?php

namespace undefined;

class Luminaria
{
    var $modelo;
    var $cor;
    var $potencia;
    var $acesa;
    var $ligada;
    var $iluminando;

    function acender() {
        if ($this->ligada == false) {
            echo "<p>ERRO! Ligue a tomada antes de tentar acender a luminária</p>";
        } else {
            echo "<p>A luminária acendeu!</p>";
        }
    }
    function ligar() {
        $this->ligada = true;
    }
    function desligar() {
        $this->ligada = false;
    }
}