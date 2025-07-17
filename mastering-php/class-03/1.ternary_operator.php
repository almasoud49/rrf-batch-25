<?php
$score = 55;
$result = ($score > 50) ? "Pass\n" : 'Fail';
echo $result;

$is_logged_in = true;
$message = $is_logged_in ? "Welcome, User\n" : "Please, Login\n";
echo $message;

$promo_code = 'DISCOUNT10';
$discount = ($promo_code == 'DISCOUNT10') ? 0.10 : 0.00;
$total_price = 100;
$final_price = $total_price - ($total_price*$discount);
echo "Final Price: $final_price\n";

$age = 17;
$age_group = ($age >=18) ? "Adult\n" : "Minor\n";
echo "You are an $age_group\n";

//Null Coalescing(??) Operator
$user_name = $_POST['name'] ?? "Guest\n";
echo "Hello, $user_name\n";

$config_value = $config['setting'] ?? "default_value\n";
echo $config_value;

$a = null;
$b =null;
$c = 'Hello!';
echo $a ?? $b ?? $c;

