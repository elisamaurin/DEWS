<?php


    function mostrarNoticias($noticias, $filtro){
        if(isset($filtro)){
            foreach($noticias as $noticia){
                if($noticia->titulo == $filtro){
                    echo "<p>". $noticia->titulo ." -- ". $noticia->fecha ."<p>";
                }
            }
        }
        else{
            foreach($noticias as $noticia){
                echo "<p>". $noticia->titulo ." -- ". $noticia->fecha ."<p>";
            }
        }
    }
?>