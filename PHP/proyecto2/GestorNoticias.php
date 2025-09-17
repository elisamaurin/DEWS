<?php

    include Noticia; 

    class GestorNoticias(){
        $noticia1 = new Noticia("Inicio de curso", "2021-09-15");
        $noticia2 = new Noticia("titulo2", "2021-09-01");

        $noticias = array($noticia1, $noticia2);

        public function get_noticias($busqueda = ""){
            if($busqueda == ""){
                return $this->noticias; 
            }

            $resultados = array();

            foreach($this->noticias as $x){
                if(stripos($x->titulo, $busqueda) != false){
                    $resultados[]=$x; 
                }
            }

            return $resultados; 
        }
    }

?>