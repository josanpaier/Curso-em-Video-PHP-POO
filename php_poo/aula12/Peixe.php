<?php
require_once "Animal.php";

class Peixe extends Animal {
    private $corEscama;

    // Métodos
    public function locomover() {
        echo "<p>Nadando</p>";
    }
    public function alimentar() {
        echo "<p>Comendo substâncias</p>";
    }
    public function emitirSom() {
        echo "<p>Peixe não faz som</p>";
    }
    public function soltarBolha() {
        echo "<p>Soltou uma bolha</p>";
    }

    // Métodos especiais


    /**
     * Get the value of corEscama
     */
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * Set the value of corEscama
     */
    public function setCorEscama($corEscama): self
    {
        $this->corEscama = $corEscama;

        return $this;
    }
}