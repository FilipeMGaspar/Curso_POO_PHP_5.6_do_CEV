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
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->repoduzindo = false;
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
        $media = ($this->avaliacao + $avaliacao) / $this->views;
        $this->avaliacao = $media;
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
        $this->curtidas++;
    }

    public function pause() {
        $this->repoduzindo = false;
    }

    public function play() {
        $this->repoduzindo = true;
    }

    
    
}
