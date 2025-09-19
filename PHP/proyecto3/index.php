<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Concesionario pirámide </h2>
    <a>Coches</a> 
    <a> Nuevo </a>

    <form action="/" method="get">
        <input type="text" placeholder="Introduce aquí la matrícula">
        <button>Buscar</button>
    </form>

    <ul>
        <?php

            $coches = array();

            $coche = addCoche();

            if(isset($coche)){
                array_push($coches, $coche);
            }

            foreach($coches as $coche){
                echo $coches; 
            }

        ?>
    </ul>    

</body>
</html>