<?php

    class Matematicas{

        private $numero1;
        private $numero2;
    

        public function _construct(){
        $this->numero1 = 0;
        $this->numero2 = 0;
        }
        //recibe el primer numero ingresado.
        public function setNumero1($valor){
        $this->numero1 = $valor;

        }

        protected function getNumero1(){
        return $this->numero1;
        }
        //recibe el segundo numero ingresado.
        public function setNumero2($valor){
        $this->numero2 = $valor;

        }

        protected function getNumero2(){
        return $this->numero2;
        }


    }



?>