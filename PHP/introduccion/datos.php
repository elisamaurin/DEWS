<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ejercicio datos </title>
</head>
<body>
    <h2>Resultado: </h2>
    <?php
        if(isset($_POST["email"])&& isset($_POST["password"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            echo "<p>email: $email</p>";
            echo "<p>contraseña: $password</p>";
        }else{
            echo "ERROR";
        }
    ?>
</body>
</html>