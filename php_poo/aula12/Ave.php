<?php
require_once "Animal.php";

class Ave extends Animal {
    private $corPena;

    // Métodos
    public function locomover() {
        echo "<p>Vando</p>";
    }
    public function alimentar() {
        echo "<p>Comendo frutas</p>";
    }
    public function emitirSom() {
        echo "<p>Som da Ave</p>";
    }
    public function fazerNinho() {
        echo "<p>Construiu um ninho</p>";
    }

    // Métodos especiais
    

    /**
     * Get the value of corPena
     */
    public function getCorPena()
    {
        return $this->corPena;
    }

    /**
     * Set the value of corPena
     */
    public function setCorPena($corPena): self
    {
        $this->corPena = $corPena;

        return $this;
    }
}