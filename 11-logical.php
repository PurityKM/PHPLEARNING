<?php

$username = 'Purity';
$password = 'puri0101..';
$total_marks = 400;
$mean_grade = 'B+';

?>
<html>
    <body>

<?php
//And operator (&&)
//TRUE if both operands are TRUE
if($username == 'Purity' && $password == 'puri0101'){
    echo "Check your details again!";
} else{
    echo "Your details are correct, you can continue to submit your details.";
}
echo '<br';
?>

<?php
//Or operator (||)
//TRUE if either of operands is TRUE
if($total_marks > 400 || $mean_grade == 'A'){
    echo "WOW! You deserve some awards.";
} else {
    echo "You need to pull up and your socks and aim higher.";
}
echo '<br';
?>

<?php
//Not operator (!)
//TRUE is the operand is TRUE
if(!$mean_grade){
    echo "You can't join a public University.";
}else{
    echo "You can join a public University.";
}

?>
</body>
</html>