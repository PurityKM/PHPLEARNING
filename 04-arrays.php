<?php




?>


<html>
    <head>
        <title>LEARNING PHP</title>
    </head>
    <body>
        <?php
        $fruits = array('Mango','Apple','Orange','Watermelon','Banana','Avocado');

        echo count($fruits);
        echo '<br>';
        // var_dump($fruits)
        ?>

        <?php
        echo $fruits[4];
        echo '<br>';
        foreach($fruits as $fruit){
            echo $fruit;
        }
        ?>
    </body>
</html>