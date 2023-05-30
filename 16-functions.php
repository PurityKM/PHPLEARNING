<?php

//functions

//A function is a block of statements that can be repeatedly in a program.
//It will not execute immediately when a page loads
// It will be executed by a call to the function.

// function functionName(){
//     execute code
// }

// Things to know about function
// 1. There are functions that require 'arguments', and
// 2. There are functions that don't require 'arguments.

?>
<html>
    <body>


<?php

// 1. BUILT-IN FUNCTIONS

//PHP sort() function
$a = array('Purity', 'Maggie', 'Ann', 'Lucy');
sort($a); //sorts in alphabetical order.
print_r($a);

echo '<br>';

foreach($a as $name){
    echo "$name <br>";
}

rsort($a);
echo '<br>';
print_r($a);
echo '<br>';
foreach($a as $name){
    echo "$name <br>";
}

$name = 'purity';
$lower = strtoupper($name);
echo $lower;
echo '<br>';
echo '<br>';

$password = "HerPassword";
echo "Before: $password <br>";

$password = sha1($password);
echo "After: $password";
echo '<br>';echo '<br>';
//DO RESEARCH ON OTHER BUILT-IN FUNCTINS

// 2. CUSTOM FUNCTIONS 

function greetings(){
    echo "Hello there, I am Purity and am Learning PHP!";
}
greetings();
echo '<br>';

function areaSquare($length, $width){
    echo ($length * $width);
}
areaSquare(40, 20);
echo '<br>';

function isNice($country){
    echo "I would love to visit to $country. <br>";
}

isNice("INDIA");
isNice("SINGAPORE");
isNice("AMERICA");
isNice("KARTAR");
isNice("PHILLIPEANS");

?>


    </body>
</html>