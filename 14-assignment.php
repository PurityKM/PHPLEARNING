<?php

//Assignment operations
$a = 70;
$b = 14;
$c = 2;
$d = 11;
$e = 10;
$f = 20;
$g = 50;
$h = 3;
$i = 2;
?>

<html>
    <body>
        <?php

    //Addition +=
    $a += $b;
    echo $a;
    echo '<br>';

    //Subtraction -=
    $d -= $c;
    echo $d;
    echo '<br>';

    //Multiplication *=
    $e *= $f;
    echo $e;
    echo '<br>';

    //Division /=
    $g /= 10;
    echo $g;
    echo '<br>';

    //Modulus %=
    $h %= $i;
    echo $h;
    echo '<br>';

    //Concatenation .=
    $a .= $b;
    echo $a;


        ?>
    </body>
</html>