<?php

    include "Coche.php";

    function addCoche(){
        if(isset($_POST["matricula"]) && isset($_POST["marca"]) && isset($_POST["modelo"]) && isset($_POST["km"])){
            $matricula = $_POST['matricula'];
            $marca = $_POST['marca']; 
            $modelo = $_POST['modelo']; 
            $km = $_POST['km']; 
            return new Coche($matricula, $marca, $modelo, $km);
        }
    }
?>