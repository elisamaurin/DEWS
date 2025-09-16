<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function procedimientoSuma($a, $b){
            $suma = $a + $b;
            return $suma;
        }
        echo "<h1> El resultado de la suma es: ". procedimientoSuma(6,7) ."</h1>";
    ?>
</body>
</html>