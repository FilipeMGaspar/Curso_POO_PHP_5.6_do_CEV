<?php
 var $marca;
 var $modelo;
 var $tipo;
 var $ligado;
 var $comfolha;

 function colcarFolha(){
    $this->comfolha = true;
 }

 function ligar(){
    $this->ligado = true;
 }

 function desligar(){
     $this->ligado = false;
 }

 function imprimir(){
    
 }
