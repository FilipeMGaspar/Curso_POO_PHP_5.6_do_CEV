<?php
class Lutador {
    //atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    //Métodos especiais
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }
    
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getAltura() {
        return $this->altura;
    }
    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getPeso() {
        return $this->peso;
    }
    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function getCategoria() {
        return $this->categoria;
    }
    private function setCategoria() {
        if($this->peso < 52.2){
           $this->categoria = "Inválida"; 
        }elseif ($this->peso <= 70.3){
            $this->categoria = "Leve";
        }elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        }elseif($this->peso <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválida"; 
        }
        
    }

    public function getVitorias() {
        return $this->vitorias;
    }
    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }
    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }
    public function setEmpates($empates) {
        $this->empates = $empates;
    }
    
    
    //Métodos ganhar, perder empatar 
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
    
    public function apresentar() {
        echo '<p>Nome: '.$this->getNome().'</p>';
        echo '<p>Nacionalidade: '.$this->getNacionalidade().'</p>';
        echo '<p>Idade: '.$this->getIdade().' Anos</p>';
        echo '<p>'.$this->getAltura().' m de altura.</p>';
        echo '<p>Pesando: '.$this->getPeso().' Kg</p>';
        echo '<p>Ganhou: '.$this->getVitorias().'</p>'; 
        echo '<p>Perdeu: '.$this->getDerrotas().'</p>';
        echo '<p>Empatou: '.$this->getEmpates().'</p>';
    }
    
    public function status() {
        echo "<p>".$this->getNome().", é um peso ".$this->getCategoria();
        echo ", ".$this->getVitorias()." Vitórias, ".$this->getDerrotas()." Derrotas, ";
        echo $this->getEmpates()." Empates! </p>";
    }
}
/*
   
*/