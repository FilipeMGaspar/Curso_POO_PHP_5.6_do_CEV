<?php
    class ContaBanco {
        //Atributos
        public $numConta;
        protected $tipoConta;
        private $donoConta;
        private $saldoConta;
        private $statusConta; //Verdadeiro(true) conta aberta falso(false) conta fechada
        
        //Métodos especiais
        
        public function ContaBanco(){//Método Construtor
            $this->saldoConta = 0;
            $this->statusConta = false; //Conta fechada            
        }

        //Método Get e set para o atributo numConta
        public function getNumConta(){
            return $this->numConta;
        }    
        public function setNumConta($nrConta){
            $this->numConta = $nrConta;
        }
    }
?>