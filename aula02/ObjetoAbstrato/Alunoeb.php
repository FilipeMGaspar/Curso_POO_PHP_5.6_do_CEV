<?php
 class Alunoeb{
    var $nome;
    var $anoNascimento;
    var $turma;
    var $inscrito;

    function increver(){
        $this->inscrito = true;
    }

    function transferir(){
        $this->inscrito = false;
    }    

    function entrarNaEscola(){
        if($this->inscrito == true){
            echo "<p>Seja Bem vindo! Escola Curso Em Video!</p>";
        }else{
            echo "<p>Inscreva-se para entrar na Escola Curso Em Video!</p>"
        }
    }

     
 }