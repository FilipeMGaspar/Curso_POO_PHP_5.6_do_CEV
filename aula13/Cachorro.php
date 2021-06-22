<?php
require_once 'Lobo.php';

class Cachorro extends Lobo {
    
    //Método abstracto sobrescrito
    public function emitirSom() {
        echo "<p> &#X1F436 Au! Au! Au! &#X1F415</p>";        
    }
    
    //Sobrecarga de Métodos 
    public function reagir($frase) {
        if($frase === "olá" || $frase === "Toma"){
            echo "<p>Abanar o rabo e latir</p>";
        }else{
            echo "<p>Rosnar!</p>";
        }
    }
}