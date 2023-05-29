<?php

// Associative array
//Gives a custom name to the key rather than using the number.
$laptop = array(

    'type'        => "HP Folio",
    'RAM'         => "4gb",
    'storage'     => 500

);


?>

<html>
    <head>
        <title>LEARNING PHP</title>
    </head>
    <body>
        <?php echo $laptop['storage'];?>
        <?php echo $laptop['type'];?>
        <?php echo $laptop['RAM'];?>
    </body>
</html>