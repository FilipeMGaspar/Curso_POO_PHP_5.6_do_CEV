<?php
require_once 'Animal.php';

class Mamifero extends Animal{
   //Atributos
    private $corPelo;
  
    //Metodos abstratos sobrescritos 
    public function alimentar() {
        echo "<p>Em cria. Mamando. &#X1F37C</p>";
    }

    public function emitirSom() {
        echo "<p>Som de Mamífero! </p>";
    }

    public function locomever() {
        echo '<p>Correndo! </p>';
    }

   //Métodos geter e seter
   public function getCorPelo() {
       return $this->corPelo;
   }
   public function setCorPelo($corPelo) {
       $this->corPelo = $corPelo;
   }


    
}
