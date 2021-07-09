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

    //Métodos Geter e Seter
    public function getEspectador() {
        return $this->espectador;
    }
    public function setEspectador($espectador) {
        $this->espectador = $espectador;
    }
    
    public function getFilme() {
        return $this->filme;
    }
    public function setFilme($filme) {
        $this->filme = $filme;
    }


}
