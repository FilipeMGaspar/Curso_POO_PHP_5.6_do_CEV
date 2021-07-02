<?php
require_once 'AcoesVideo.php';

class Video implements AcoesVideo {
   //Atributos
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $repoduzindo;
    
    //Método Construtor
    public function __construct($titulo) {
        $this->titulo = $titulo;
    }

    
    //Métodos geter e seter
    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
    }
    public function setAvaliacao($avaliacao) {
        $this->avaliacao = $avaliacao;
    }

    public function getViews() {
        return $this->views;
    }
    public function setViews($views) {
        $this->views = $views;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }
    public function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }

    public function getRepoduzindo() {
        return $this->repoduzindo;
    }
    public function setRepoduzindo($repoduzindo) {
        $this->repoduzindo = $repoduzindo;
    }

    //Implementação dos méytodos abstracos vindos da Interface
    public function like() {
        
    }

    public function pause() {
        
    }

    public function play() {
        
    }

    
    
}
