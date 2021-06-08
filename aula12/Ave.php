<?php
require_once 'Animal.php';

class Ave {
    //Atributos
    private $corPenas;
    
    //Métodos Geter e Seter
    public function getCorPenas() {
        return $this->corPenas;
    }
    public function setCorPenas($corPenas) {
        $this->corPenas = $corPenas;
    }


}
