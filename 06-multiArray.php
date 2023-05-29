<?php  

$programming_languages = array(
    array(
        'name'             => 'PHP Language',
        'stack'            => 'Backend',
        'framework'        => 'Laravel Framework',
        'year'             => '2007'
    ),
    array(
        'name'             => 'PYTHON Language',
        'stack'            => 'FullStack',
        'framework'        => 'DJANGO Framework',
        'year'             => '2009'
    ),
    array(
        'name'             => 'JAVASCRIPT Language',
        'stack'            => 'Frontend',
        'framework'        => 'REACT Framework',
        'year'             => '2010'
    ),
    array(
        'name'             => 'MYSQL Language',
        'stack'            => 'Backend',
        'framework'        => 'MONGODB Framework',
        'year'             => '2013'
    )
);

?>

<html>
    <head>
        <title>LEARNING PHP</title>
    </head>
    <body>

    <?php echo count($programming_languages); ?>
    <?php echo $programming_languages[0]['name'];
        // echo $programming_languages[3]['framework'];
        ?>
    </body>
</html>