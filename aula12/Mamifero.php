<?php
require_once 'Animal.php';

class Mamifero extends Animal{
    private $corPelo;
  
    public function alimentar() {
        echo "<p>Em cria. Mamando.</p>";
    }

    public function emitirSom() {
        echo "<p>Som de Mamífero! 🦣</p>";
    }

    public function locomever() {
        echo '<p>Correndo! </p>';
    }

}
