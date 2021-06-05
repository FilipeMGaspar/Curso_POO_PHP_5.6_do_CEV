<?php

abstract class Animal {
    protected $peso;
    protected $idade;
    protected $membros;
    
    abstract public function locomever();
    abstract public function alimentar();
    abstract public function emitirSom();
}
