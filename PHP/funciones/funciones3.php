<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $resultado = 0;

        function sumaReferencia(&$resultado, $a, $b){
            $resultado += $a + $b;
        }

        sumaReferencia($resultado, 5, 6);

        echo $resultado;
    ?>
</body>
</html>