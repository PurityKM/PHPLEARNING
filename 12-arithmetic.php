<?php

$birth_year = 2000;
$this_year = date('Y');
$monthly_salary = 45000;
$shoes = 5;
$tshirts = 10;
$trousers = 7;


?>

<?php

//Addition/sum
$total_items = ($shoes + $tshirts + $trousers);
echo $total_items;
echo '<br>';

//Subtraction/difference
$my_age = ($this_year - $birth_year);
echo $my_age;

echo '<br>';

//Multiplication/product
$annual_salary = ($monthly_salary * 12);
echo $annual_salary;
echo '<br>';

//Division/quotient
$daily_income = ($monthly_salary / 30);
echo $daily_income;
echo '<br>';

//Modulus/remainder
$remain = ($tshirts % $trousers);
echo $remain;
echo '<br>';

$all_in_one = (($tshirts + $shoes )/ 2 * (20 - 5));
echo $all_in_one;
?>