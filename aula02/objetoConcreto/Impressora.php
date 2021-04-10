<?php
 var $marca;
 var $modelo;
 var $tipo;
 var $ligado;

 function ligar(){
    $this->ligado = true;
 }

 function desligar(){
     $this->ligado = false;
 }

 function imprimir(){
    if($this->ligado = true){
        echo "<p>A Imprimir!</p>";
    }else{
        echo "<p>ERRO! Impressora desligada!</p>";
    }
 }
