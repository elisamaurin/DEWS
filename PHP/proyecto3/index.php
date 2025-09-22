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

            $coches = array();

            $coche = addCoche();

            if(isset($coche)){
                array_push($coches, $coche);
            }

            $coche1= new Coche("123", "Opel", "Corsa", "100000");
            $coche2= new Coche("456", "Renault", "Megane", "5000");
            $coche3= new Coche("789","Ford","Focus","25000");

            array_push($coches,$coche1, $coche2, $coche3);

            if(isset($_GET["matricula"])){
                $matriculaBuscada = $_GET['matricula'];
                $cocheEncontrado = null; 
                foreach($coches as $coche){
                    if($coche->matricula == $matriculaBuscada){
                        $cocheEncontrado = $coche;
                    }
                }
                if($cocheEncontrado){
                 echo "<li>" . $cocheEncontrado->mostrarDatos() . "</li>";
                }else{
                    foreach ($coches as $coche) {
                        echo "<li>" . $coche->mostrarDatos() . "</li><br>";
                    }    
                }
            }
        ?>
    </ul>    
</body>
</html>