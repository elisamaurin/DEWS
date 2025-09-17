<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        include GestorNoticias; 

        $gestor = new GestorNoticias();
        $busqueda = isset($_GET["titulo"]) ? $_GET["titulo"] : "";
        $noticias = $gestor->get_noticias($busqueda);
    ?>

    <form action="noticias.php" method="get">
        <input type="text" placeholder= "Pon aquí el título" value="<?=htmlspecialchars($busqueda)?>" name="titulo">  
        <button type="submit">Enviar</button>
    </form>
    
    <?php foreach($noticias as $x):?>
        <p><?=$x->$titulo?> -- <?=$x->$fecha?></p>
    <?php endforeach ?>
    
</body>
</html>