<!DOCTYPE html>
<html>
    <body>
        <ul>
        <?php

            $perros = array("Yorkshire", "Chihuahua", "Podenco", "Husky", "Galgo");
            foreach($perros as $perro){
                echo '<li>'.$perro.'</li>';
            }

        ?>
        </ul>
    </body>
</html>

