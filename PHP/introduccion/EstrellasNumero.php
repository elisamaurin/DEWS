<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET["numero"])){
            $n = $_GET["numero"];
            echo "$n";
            for($i = 0; $i <= $n; $i++){
                for($j = 0; $j < $i; $j++){
                    echo "*";
                }
                echo "<br></br>";
            }
        }else{
            echo "Pasa un número válido";
        }
    ?>
</body>
</html>