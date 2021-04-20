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

        //Método Get e set para o atributo tipoConta
        public function getTipoConta(){
            return $this->tipoConta;
        }
        public function setTipoConta($tipo){
            $this->tipoConta = $tipo;
        }

        //Método Get e set para o atributo donoConta (Nome do 1º titular)
        public function getDonoConta(){
            return $this->donoConta;
        }
        public function setDonoConta($titularConta){
            $this->donoConta = $titularConta;
        }

        //Método Get e set para o atributo saldoConta
        public function getSaldoConta(){
            return $this->saldoConta;
        }
        public function setSaldoConta($valor){
            $this->saldoConta = $valor;
        }

        //Método Get e set para o atributo statusConta (true conta aberta) (false conta fechada)
        public function getStatusConta(){
            return $this->statusConta;
        }
        public function setStatusConta($status){
            $this->statusConta = $status;
        }

        //Métodos 
        public function abrirConta($tipoDeConta){ //Método para abrir conta
            $this->setTipoConta($tipoDeConta);
            $this->setStatusConta(true);

            if($tipoDeConta === "CC"){
                $this->setSaldoConta(50);
            }elseif ($tipoDeConta === "CP"){
                $this->setSaldoConta(150);
            }
        }

        public function fecharConta(){ //Método para fechar a conta
            if($this->getStatusConta()){
                if($this->getSaldoConta() > 0){
                    echo "<p>Impossivel fechar a Conta!</p>";
                    echo "<p>A Conta com saldo de R$ ". $this->getSaldoConta()."</p>";
                    echo "<p>O saldo da conta deverá ser de R$ 0</p>";
                }elseif($this->getSaldoConta() < 0){
                    echo "<p>Impossivel fechar a Conta!</p>";
                    echo "<p>A sua conta está com saldo negativo de de R$ ". ($this->getSaldoConta() * -1)."</p>";
                    echo "<p>O saldo da conta deverá ser de R$ 0</p>";
                }else{
                    $this->setStatusConta(false); //Conta Fechada
                }
            }else{
                echo "<p>Impossivel fechar a Conta!</p>";
                echo "<p>Ainda não tem uma conta no BANCO CEV!</p>";
                echo "<p>Abra uma! É fácil, seguro e super rentavel!</p>";
            }
        }

        public function depositar($valorDeposito){//Método para depositar valores na conta
            if($this->getStatusConta()){
                $this->setSaldoConta($this->getSaldoConta() + $valorDeposito);
            }else{
                echo "<p>Lamentamos! Mas o seu deposito não é possivel!</p>";
                echo "<p>Ainda não tem uma conta no BANCO CEV!</p>";
                echo "<p>Abra uma! É fácil, seguro e super rentavel!</p>"; 
            }
        }

        public function sacar($sacaValor){ //Método para efectuar um levantamento na conta
            if($this->getStatusConta()){
                if($this->getSaldoConta() >= $sacaValor){
                    $this->setSaldoConta($this->getSaldoConta() - $sacaValor);
                }else{                    
                    echo "<p>Saldo Insuficiente!</p>";
                    echo "<p>Levantamento pretendido: R$ " . $sacaValor . "</p>";
                    echo "<p>Saldo Disponivel: R$ ". $this->getSaldoConta() ."</p>";
                }
            }else{
                echo "<p>Lamentamos! Mas o seu levantamento não é possivel!</p>";
                echo "<p>Ainda não tem uma conta no BANCO CEV!</p>";
                echo "<p>Abra uma! É fácil, seguro e super rentavel!</p>"; 
            }
        }

        public function pagarMensal(){ //Método para pagamento mensal da manutenção de conta
            if($this->getTipoConta() === "CC"){
                $mensalidade = 12;
            }elseif($this->getTipoConta() === "CP"){
                $mensalidade = 20;
            }

            if($this->getStatusConta()){
                if($this->getSaldoConta() >= $mensalidade){
                    $this->setSaldoConta($this->getSaldoConta() - $mensalidade);
                }else{
                    echo "<p>Impossivel pargar a mensalidade.</p>";
                    echo "<p>Saldo Insuficiente!</p>";
                    echo "<p>Mensalidade: R$ " . $mensalidade . "</p>";
                    echo "<p>Saldo Disponivel: R$ ". $this->getSaldoConta() ."</p>"; 
                }
            }else{
                echo "<p>Ainda não tem uma conta no BANCO CEV!</p>";
                echo "<p>Abra uma! É fácil, seguro e super rentavel!</p>"; 
            }
        }
    }
?>
