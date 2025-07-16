<?php
// define('CONSTAANT_NAME', 'value');
// const CONSTANT_NAME='value';

//Reservation the number of days in a week

define('DAYS_IN_WEEK', 7);
echo "There are: " . DAYS_IN_WEEK . " days in a week\n";

//VAT rate reservation
define('VAT_RATE', 0.15);
$product_price = 100;
$total_price= $product_price + ($product_price*VAT_RATE);
echo "Total price including VAT: " . $total_price . "\n";

//PI value reservation
define('PI', 3.1415927);
$radius= 5;
$circumference = 2 * PI * $radius;
echo "Circumferencce of the circle: " . $circumference . "\n";

