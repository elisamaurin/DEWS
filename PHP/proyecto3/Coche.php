<?php
    class Coche{
        public $matricula; 
        public $marca; 
        public $modelo; 
        public $km; 

        public function __construct($matricula, $marca, $modelo, $km){
            $this->matricula = $matricula; 
            $this->marca = $marca; 
            $this->modelo = $modelo; 
            $this->km = $km; 
        }

        public function mostrarDatos(){
            return "Matricula: ". $this->matricula ."<br><br>".
                   "Marca: ". $this->marca ."<br><br>".
                   "Modelo: ". $this->modelo ."<br><br>". 
                   "Km: ". $this->km;
        }
    }

?>