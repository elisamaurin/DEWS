<?php
    class Noticia{
        public $titulo; 
        public $fecha; 

        public function __construct($titulo, $fecha){
            $this->titulo = $titulo; 
            $this->fecha = $fecha; 
        }


        public function set_titulo($titulo){
            $this->titulo = $titulo; 
        }

        public function set_fecha($fecha){
            $this->fecha = fecha; 
        }

        public function get_titulo(){
            return $this->titulo;
        }

        public function get_fecha(){
            return $this->fecha; 
        }
    }


?>