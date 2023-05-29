<html>
    <head>
        <title>LEARNING PHP</title>
    </head>
    <body>
        <?php
       $is_logged = false;  //Boolean
       $my_name = "Purity";  //string
       $my_age = 20; //integer
       $my_favColor = "Dark purple";  //string
       $salary = 20000.45;  //float
       $birth_year = 2000;
       $this_year = date('Y');
       $her_age = ($this_year - $birth_year);
       $today_date= date('F j, Y')
        
        ?>
        <?php echo "My name is $my_name!"; ?>
        <br>
        <?php echo "I am $my_age years old and i love $my_favColor color!" ?>
        <br>
        <?php echo " My monthly salary is $salary"; ?>
        <br>
        <?php echo $her_age; ?> <br>
        <?php echo $this_year ?> <br>
        <?php echo $today_date ?> <br>
        <h3>&copy<?php echo $this_year ?> <?php echo $my_name?></h3>
    </body>
</html>