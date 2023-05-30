<?php

$shoe_size = 39;
$fav_number = '1';
$my_age = 20;
$years_on_earth = "25.32"

?>

<html>
    <body>

<?php
    //Equal to
    if($shoe_size == 39){
        echo "The shoe size fits properly.";
    }
    echo '<br>';
?>

<?php
    //identical
    if($fav_number === 1){
        echo "Favorite number is integer.";
    } elseif($fav_number === '1'){
        echo "Favorite number is a string.";
    } else {
        echo "Choose another number!";
    }
    echo '<br>';
?>

<?php
    //Not equal 
    if($my_age != 20){
        echo "You are not old enough to get married";
    }
    echo '<br>';
?>
<?php
    //Not identical
    if($years_on_earth !== "25.30"){
        echo "You are not exactly the string '$years_on_earth' ";
    }else{
        echo "You are exactly the string '$years_on_earth'";
    }
    echo '<br>';
?>
<?php
    //less than
    if($my_age < 25 ){
        echo "You are eligible to get married.";
    }
    echo '<br>';
?>
    <?php
    //greater than
    if($my_age > 18 ){
        echo "Your can register as a voter!";
    }
    
    ?>


    </body>
</html>