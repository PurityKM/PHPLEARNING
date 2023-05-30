<?php

$i = 0;

$k = 10;

$fruits_arr = array('Mango', 'Apple', 'Banana', 'Watermelon');

?>
<html>
    <body>

    <?php
    // while (condition is true){
//     execute code
// }
    while ($i <= 15){
        echo $i;
        echo '<br>';
        $i++;
    }
    while ($k >= 7){
        echo $k;
        echo '<br>';
        $k--;
    }
    
    //for loop
    //for(initialize counter; test if TRUE; INCREMENT counter){
        //execute code
    //}
        for($a = 1; $a <= 6; $a++){
            echo "Number: $a <br>";
        }

    //foreach loop
    //This is used extensively in database-driven websites. 
    //It help to loop through each keyvalue pair in the array.
    //foreach($array as $value){
        //execute code
    //}
    foreach($fruits_arr as $fruit){
        echo "I love $fruit <br>";
    }
    echo '<br>';
    echo "I love $fruits_arr[3]";

    //do while loop
    // While the While loop only start if the condition is TRUE:,
    // Do While Loop will always execute the first time, then evaluate whether the condition is TRUE afterwards.
    // do {
    //     execute code
    // }while(condition to be met);

    $j = 0;

    do{
        echo "Number: $j <br>";
        $j++;
    }while ($j <= 8);


    ?>


    </body>

</html>