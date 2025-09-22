<?php
    include ("../../CONEXBDD/conexionBBDD.php");

    $sql = "INSERT INTO coche (matricula, marca, modelo, km) VALUES ('123', 'Opel', 'Corsa', 100000.0)";

    if($conn->query($sql) == TRUE){
        echo "Se ha guardado satisfactoriamente";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?> 