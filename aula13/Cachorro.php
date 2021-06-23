<?php
require_once 'Lobo.php';

class Cachorro extends Lobo {
    
    //Método abstracto sobrescrito
    public function emitirSom() {
        echo "<p> &#X1F436 Au! Au! Au! &#X1F415</p>";        
    }
    
    //Sobrecarga de Métodos 
    public function reagirFrase($frase) {
        if($frase === "Olá" || $frase === "Toma" || $frase === "Comida"){
            echo "<p>Abanar o rabo e latir</p>";
        }else{
            echo "<p>Rosnar!</p>";
        }
    }
    
    public function reagirHoras($horas, $min){
       if($horas<12){
           echo "<p>Abanar o rabo!</p>";
       } else if($horas >= 18){
           echo "<p>Ignorar</p>";
       }else {
           echo "<p>Abanar e Latir!</p>";
       }
    }
    
    public function reagirDono($dono){
        if($dono === true){
            echo "Abanor o rabo e saltar";
        }else{
            echo "<p>Ladrar, Rosnar, correr atrás!</p>";
        }
    }
    
    public function reagirIdadePeso($idade, $peso) {
        if ($idade < 5){
            if($peso < 10){
                echo "<p>Abanar o rabo, correr!</p>";
            }else {
                echo "<p>Rebolar e latir!</p>";
            }
        } else {
            if($peso < 10){
                echo "<p>Comer e dormir!</p>";
            } else {
                echo "<p>Descaçar na sombra e ignorar o dono. </p>";
            }
        }
    }
}