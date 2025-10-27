<?php 
    require_once 'Controlador.php';

    class ControleRemoto implements Controlador{
        private $volume;
        private $ligado;
        private $tocando;

        public function __construct() {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        } 
        
        public function getVolume() {
            return $this->volume;
        }
        public function setVolume($volume) {
            $this->volume = $volume;
        }

        public function getLigado() {
            return $this->ligado;
        }
        public function setLigado($ligado) {
            $this->ligado = $ligado;
        }

        public function getTocando() {
            return $this->tocando;
        }
        public function setTocando($tocando) {
            $this->tocando = $tocando;
        }


        // colocar as functions abstratas da interface
        
        
        

    }


?>