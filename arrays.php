<?php

$fruits = ['apples', 'oranges', 'pears','watermelon','oranges','banana','pears'];

if(count($fruits) > 0){
   foreach($fruits as $fts){
      var_dump($fts.'<br>');
   }
}

//values count
$orderFruits = array_count_values($fruits);
echo '<pre>';
print_r($orderFruits);
echo '</pre>';

$fruitsReversed = array_reverse($fruits, true);

echo '<pre>';
print_r($fruits);
echo '</pre>';
echo '<pre>';
print_r($fruitsReversed);
echo '</pre>';


//INDEXED ARRAY
$name = ["Purity", "Irungu"];
$first_key = array_key_first($name);
$last_key = array_key_last($name);

var_dump($first_key); //prints the first index[0]
echo '<br>';
var_dump($last_key);  //prints the last index[1]
echo '<br>';

//ASSOCIATIVE ARRAY
$nameAssoc = [
    'fname'  => 'Purity',
    'lname'  => 'Irungu'
];
$firstKeyAssoc = array_key_first($nameAssoc); //prints the first key[fname]
var_dump($firstKeyAssoc);
echo '<br>';
$lastKeyAssoc = array_key_last($nameAssoc);  //prints the last key[lnmae]
var_dump($lastKeyAssoc);
echo '<br>';

//GET KEY FROM AN EMPTY ARRAY
$test = [];
$testKey = array_key_last($test);
var_dump($testKey);
?>

<?php
 
 $favColors = ["Pink", "Blue", "Purple", "White", "Black", "Maroon"];
 $favColorKeys = array_keys($favColors, "Black");

 print '<pre>';
 print_r($favColorKeys);
 echo '</pre>';
 echo '<br>';

 $favItem = ["Pink", "Blue", "Purple", "White", "Black", "Maroon", 1, '1', true];
 $favItemKeys = array_keys($favItem, '1', TRUE); // YOU HAVE TO SET A STRICT VALUE TRUE INORDER TO PRINT ONLY A STRING OF '1'

 print '<pre>';
 print_r($favItemKeys);
 echo '</pre>';

?>

<?php

 //CHECKING IF IT IS AN ARRAY
 $greeting = "Hello World";
 $person =[];
 
 if(is_array($greeting)){
    print 'This is an array';
 } else {
    print 'This is not an array';
 }
 echo '<br>';

 //using ternary operator
 print (is_array($greeting)) ? 'This is an array' : 'This is not an array';
 echo '<br>';
 print (is_array($person)) ? 'This is an array' : 'This is not an array';

?>

<?php
//USE OF RANGE

$marks = range(20, 100, 5);

print '<pre>';
print_r($marks);
print '</pre>';
echo '<br>';

$alphabets = range('A', 'Z', 5);

print '<pre>';
print_r($alphabets);
print '</pre>';

?>

<?php
//USE OF SHUFFLE

$items = range(1, 10);
print '<pre>';
print_r($items);
print '</pre>';
echo '<br>';

shuffle($items);
print '<pre>';
print_r($items);
print '</pre>';

?>

<?php

$basket = ['socks', 'jeans', 'blouse'];
$basketFlipped = array_flip($basket);

print '<pre>';
print_r($basket);
print_r($basketFlipped);
print '</pre>';

?>