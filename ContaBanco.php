<?php 


    class ContaBanco {
        
        public $numConta;
        protected $tipoConta;
        private $donoConta ;
        private $saldoConta;
        private $statusConta;
        private $valor;

        
        public function __construct() {
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta criada com sucesso!</p>";
        }

        //numero da conta
        public function setNumConta($num) {
            $this->numConta = $num;
        }
        public function getNumConta() {
            return $this->numConta;
        }

        // tipo 
        public function setTipo($tipo) {
            $this->tipoConta = $tipo;
        }
        public function getTipo() {
            return $this->tipoConta;
        }
        
        // dono da conta
        public function setDono($dono) {
            $this->donoConta = $dono;
        }
        public function getDono() {
            return $this->donoConta;
        }
        
        // saldo da conta
        public function setSaldo($saldo) {
            $this->saldoConta = $saldo;
        }
        public function getSaldo() {
            return $this->saldoConta;
        }
        
        // status
        public function setStatus($status) {
            $this->statusConta = $status;
        }
        public function getStatus() {
            return $this->statusConta;
        }

        public function abrirConta($tipo) {
            $this->setTipo($tipo);
            $this->setStatus(true);
            if ($tipo == "CC") { //conta corrente
              $this->setSaldo(50);  
            } elseif ($tipo == "CP") { // conta poupança
                $this->setSaldo(150);
            }
        }

        public function fecharConta() {
            if ($this->getSaldo() > 0) {
                echo "<p>Conta ainda tem dinheiro, não posso fecha-lá!</p>";
            } elseif ($this->getSaldo() < 0) {
                echo "<p>A conta está em débito, impossivel encerrar!</p>";
            } else {
                $this->setSaldo(false);
            }
        }

        public function depositar($valor) {
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() + $valor);
                echo "<p>Deposito de R$ ". $valor ." na conta de " . $this->getDono() ."</p>";
            } else {
                echo "<p>Conta fechada. Não consigo depositar.</p>";
            }
        }

        

        public function sacar($valor) {
            if ($this->getStatus()) {
                if ($this->getSaldo() > $valor) {
                    $this->setSaldo($this->getSaldo() - $valor);
                    echo "<p>Saque de R$". $valor . " autorizado na conta da " .$this->getDono() . "</p>";
                } else {
                    echo "<p>Saldo insuficiente para saque</p>";
                }
            } else {
                echo "<p>Não posso sacar de uma conta fechada. </p>";
            }
        }

        public function pagarMensal() {
            if ($this->getTipo() == "CC") {
                $valor = 12;
            } else if ($this->getTipo() == "CP") {
                $valor = 20;
            }
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "Mensalidade de R$ ". $valor ." debitada na conta de " . $this->getDono() . "</p>" ;
            } else {
                echo "<p>Problemas com a conta. Não posso cobrar.</p>";
            }
            
        }
        
    }

?>

