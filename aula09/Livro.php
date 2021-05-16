<?php
require_once 'Pessoa.php';

class Livro {
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    //Método Construtor
    public function __construct($titulo, $autor, $totPaginas) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor->setNome(null);
    }
    
    //Métodos Geters e Seters
    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }
    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }
    public function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }
     public function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }
    public function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    //Métodos públicos
   public function detalhes(){
       echo "<h3> ..: Detalhes do Livro :..</h3>";
       echo "<p>Autor: ".$this->getAutor()."</p>";
       echo "<p>Título: ".$this->getAutor()."</p>";
       echo "<p>Número de Páginas: ".$this->getTotPaginas()."</p>";
       echo '<br>'; 
   }
}
