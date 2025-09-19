<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        include "gestorNoticias.php";
        include "Noticia.php"; 

        $noticia1= new Noticia("Inicio de curso", "2021-09-15");
        $noticia2= new Noticia("titulo2", "2021-09-01");
        $noticias= array($noticia1, $noticia2); 

        $busqueda = $_GET['titulo'];

        mostrarNoticias($noticias, $busqueda);
        
        if(!isset($busqueda)){
            include 'buscador.php';
        }
        
    ?>

  

    
</body>
</html>