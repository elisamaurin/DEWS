<?php

    class Noticia{
        public $titulo; 
        public $fecha; 

        public function __construct($titulo, $fecha){
            $this->titulo = $titulo; 
            $this->fecha = $fecha; 
        }

        public function set_titulo($titulo){
            $this->titulo = titulo; 
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

    $noticia1 = new Noticia("Incio de curso", "172301701");
    $noticia2 = new Noticia("Titulo2", "172301701");

    $noticias = array($noticia1, $noticia2); 

    foreach($noticias as $x){
        echo "<p> $x->get_titulo() -- $x->get_fecha<p><br>";
    }


?> 