<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2> Concesionario pirámide </h2>
    <a href="index.php">Coches</a> 
    <a href="nuevo.php"> Nuevo </a>

    <form action="index.php" method="get">
        <input type="text" name="matricula" placeholder="Introduce aquí la matrícula">
        <button>Buscar</button>
    </form>
    <form action="index.php" method="post">
        <label style="font-weight: bold;">Matricula</label>
        <input type="text" name="matricula"><br>
        <label style="font-weight: bold;">Marca</label>
        <input type="text" name="marca"><br>
        <label style="font-weight: bold;">Modelo</label>
        <input type="text" name="modelo"><br>
        <label style="font-weight: bold;">Km</label>
        <input type="text" name="km"><br>
        <button>guardar</button>
    </form>
</body>
</html>