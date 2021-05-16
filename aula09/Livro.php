<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao {
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    //Método Construtor
    public function __construct($titulo, $autor, $totPaginas, $leitores) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitores;
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
       echo "<p>Nome do Leitor: ".$this->leitor->getNome()."</p>";
       echo '<br>'; 
   }

   //Métos abstratos subrescrever os métodos
    public function abrirLivro() {
        $this->setAberto(true);
    }

    public function fecharLivro() {
        $this->setAberto(false);
    }
    
    public function avancarPag($numPag) {
        if($numPag < $this->getTotPaginas()){
          $this->setPagAtual($this->getPagAtual() +$numPag );  
          echo "<p>Avancei para a página: ".$this->getPagAtual()."</p>";
        }else{
            echo "<h4>ERRO! Não é possivel avançar para a página ". $numPag ."</h4>";
        }        
    }

    public function folhearLivro() {
        
    }

    public function recuarPag() {
        
    }

}
