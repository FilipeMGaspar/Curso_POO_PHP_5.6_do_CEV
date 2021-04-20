<?php
    class ContaBanco {
        //Atributos
        public $numConta;
        protected $tipoConta;
        private $donoConta;
        private $saldoConta;
        private $statusConta; //Verdadeiro(true) conta aberta falso(false) conta fechada
        
        //Métodos especiais
        //Método Construtor
        public function ContaBanco(){
            $this->saldoConta = 0;
            $this->statusConta = false; //Conta fechada            
        }

    }
?>