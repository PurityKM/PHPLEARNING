<?php

// if(expression){
//     code to execute if the above expression is TRUE
// } else{
//     code to execute if first expression is FALSE but the ELSEIF expression is TRUE
// }elseif{
//     code to execute if neither of the above expressions is TRUE
// }

$fav_drink = "Coffee";

if($fav_drink == "Water"){
    echo "I don't like water when it is drizzling";
} elseif($fav_drink == "Eden Tea"){
    echo "Eden tea affects my head";
} elseif($fav_drink == "Sugarless Tea"){
    echo "Sugarless is the worse tea i ever took.";
} else{
    echo "<h1>Coffee is the best drink especially when you wanna stay awake.</h1>";
}


?>