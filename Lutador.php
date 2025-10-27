<?php 

    class Lutador {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->setPeso($pe);
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empates = $em;
        }


        private function getNome() {
            return $this->nome;
        }
        private function setNome($no) {
            $this->nome = $no;
        }

        private function getNacionalidade() {
            return $this->nacionalidade;
        }
        private function setNacionalidade($na) {
            $this->nacionalidade = $na;
        }

        private function getIdade() {
            return $this->idade;
        }
        private function setIdade($id) {
            $this->idade = $id;
        }

        private function getAltura() {
            return $this->altura;
        }
        private function setAltura($al) {
            $this->altura = $al;
        }

        private function getPeso() {
            return $this->peso;
        }
        private function setPeso($pe) {
            $this->peso = $pe;
            $this->setCategoria();
        }


        // get e set categoria 
        private function getCategoria() {
            return $this->categoria;
        }
        private function setCategoria() {
            if ($this->peso < 52.2) {
                $this->categoria = "<strong>inválido</strong>";
            } elseif ($this->peso <= 70.3) {
                $this->categoria = "<strong>Leve</strong>";
            } elseif ($this->peso <= 83.9) {
                $this->categoria = "<strong>Médio</strong>";
            } elseif ($this->peso <= 120.2) {
                $this->categoria = "<strong>Pesado</strong>";
            } else {
                $this->categoria = "<strong>inválido</strong>";
            }
        }

        private function getVitorias() {
            return $this->vitorias;
        }
        private function setVitorias($vi) {
            $this->vitorias = $vi;
        }

        private function getDerrotas() {
            return $this->derrotas;
        }
        private function setDerrotas($de) {
            $this->derrotas = $de;
        }

        private function getEmpates() {
            return $this->empates;
        }
        private function setEmpates($em) {
            $this->empates = $em;
        }


        public function apresentar() {
            echo "<p>------------------------------------------------------------</p>";
            echo "CHEGOU A HORA! O lutador </p>". "<strong>" . $this->getNome() . "</strong>";
            echo " Veio diretamente de <strong>" . $this->getNacionalidade() . "</strong>";
            echo ", Tem <strong>" . $this->getIdade() . "</strong> anos e pesa <strong>" . $this->getPeso() . "</strong> Kg";
            echo "<br>Ele tem <strong>" . $this->getVitorias() . " </strong> vitórias, ";
            echo "<strong>" . $this->getDerrotas() . " </strong>derrotas e <strong>" . $this->getEmpates() . " </strong>empates";
        }
        public function status() {
            echo "<p>------------------------------------------------------------</p>";
            echo "<p><strong>" . $this->getNome() . " </strong>é um peso <strong>" . $this->getCategoria() . "</strong>";
            echo " e ja ganhou <strong>" . $this->getVitorias() . " </strong>vezes,";
            echo " perdeu <strong>" . $this->getDerrotas() . " </strong>vezes e ";
            echo " empatou <strong>" . $this->getEmpates() .  " </strong>vezes!";
        }
        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }
        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas() - 1);
        }
        public function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }

    }



?>