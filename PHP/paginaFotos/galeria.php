<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $imagenes = array('https://www.cpifppiramide.com/fotosbd/06092021211308.JPG', 'https://www.cpifppiramide.com/fotosbd/06092021211308.JPG', 'https://www.cpifppiramide.com/fotosbd/06092021211308.JPG');
            
        foreach($imagenes as $imagen){
             echo '<img src="'. $imagen .'" style="width: 100%; display: block;">';
        }
    ?>
</body>
</html>