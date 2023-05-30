<?php

      $fruits = array('Mango','Apple','Orange','Watermelon','Banana','Avocado');

      //adds to array
        $fruits[] = 'grapes';
        array_push($fruits, 'Lemon');
        array_unshift($fruits, 'Capricut'); //adds it to be the first item

        //removes from array
        array_pop($fruits); //removes last item
        array_shift($fruits); //removes first item
        unset($fruits[2]); //removes the specified index 

        $chunked_arr = array_chunk($fruits, 2); //splits into 2 chunks 
        //var_dump($chunked_arr)
        
         $num1 = [1, 2, 3, 7];
         $num2 = [4, 5, 6, 8];
         $num3 = array_merge($num1, $num2);
         print_r($num3);

         $num4 = [...$num1, ...$num2];
         var_dump($num4);

         echo '<br>';
         echo '<br>';
         $num5 = array_combine($num1, $num2);   
         print_r($num5);

         echo '<br>';
         echo '<br>';
         $num6 = array_flip($num5);
         print_r($num6);

         echo '<br>';
         echo '<br>';
         $numbers = range(0, 14);
         print_r($numbers);
        

?>


<html>
    <head>
        <title>LEARNING PHP</title>
    </head>
    <body>
        <?php
        echo count($fruits);
        // echo count($fruits);
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