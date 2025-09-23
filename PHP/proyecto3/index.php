<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Concesionario pirámide </h2>
    <a href= "index.php">Coches</a> 
    <a href= "nuevo.php"> Nuevo </a>

    <form action="index.php" method="get">
        <input type="text" name="matricula" placeholder="Introduce aquí la matrícula">
        <button>Buscar</button>
    </form>

    <ul>
        <?php
            include "gestorConcesionario.php";
            include_once "Coche.php";
            
           
            addCoche($conn);

            //$coches = array();
/*
            if(isset($coche)){
                array_push($coches, $coche);
            }
*/
           // if(isset($_GET["matricula"])){
           //     $matriculaBuscada = $_GET['matricula'];
           //     $cocheEncontrado = null; 
               /* foreach($coches as $coche){
                    if($coche->matricula == $matriculaBuscada){
                        $cocheEncontrado = $coche;
                    }
                }
                if($cocheEncontrado){
                    echo mostrarCoches($conn);
                }else{
                    foreach ($coches as $coche) {
                        echo mostrarCoches($conn);
                    }    
                }*/
            //}

            mostrarCoches($conn);
        ?>
    </ul>    
</body>
</html>