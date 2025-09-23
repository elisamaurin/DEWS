<?php
    include "../../CONEXBDD/conexionBBDD.php";
    include "Coche.php";

    function addCoche($conn){
        if(isset($_POST["matricula"]) && isset($_POST["marca"]) && isset($_POST["modelo"]) && isset($_POST["km"])){
            $matricula = $_POST['matricula'];
            $marca = $_POST['marca']; 
            $modelo = $_POST['modelo']; 
            $km = $_POST['km']; 
            $sql = "INSERT INTO Coche (matricula, marca, modelo, km) VALUES ('.$matricula.','.$marca.', '.$modelo.', '.$km.')";
            if($conn->query($sql) == TRUE){
                echo "Se ha guardado satisfactoriamente";
            }else{
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

    function mostrarCoches($conn){
        $sql = "SELECT matricula, marca, modelo, km FROM Coche";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $coche = new Coche($row['matricula'], $row['marca'], $row['modelo'], $row['km']);
                echo "<li>". $coche->mostrarDatos() ."</li>";
            }
        }
    }
?>