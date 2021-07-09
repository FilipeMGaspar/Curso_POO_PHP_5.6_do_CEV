<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao {
    //Atributos
    private $espectador;
    private $filme;
    
    //Método Construtor
    public function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
    }

}
