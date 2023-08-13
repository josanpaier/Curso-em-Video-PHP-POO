<?php
require_once "Animal.php";

class Reptil extends Animal {
    private $corEscama;

    // Métodos
    public function locomover() {
        echo "<p>Rastejando</p>";
    }
    public function alimentar() {
        echo "<p>Comendo vegetais</p>";
    }
    public function emitirSom() {
        echo "<p>Som de réptil</p>";
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