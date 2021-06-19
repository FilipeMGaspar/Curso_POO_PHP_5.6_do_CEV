<?php

abstract class Animal {     
    //Atributos
    protected $peso;
    protected $idade;
    protected $membros;
    
    //Método abstracto
    public abstract function emitirSom();
}
