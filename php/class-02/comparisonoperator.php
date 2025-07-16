<?php
$n1 = 11;
$n2 = "10";

$equal = $n1 == $n2;
var_dump($equal) . "\n";

$notEqual = $n1 != $n2;
var_dump($notEqual) . "\n";

$identical = $n1 === $n2;
var_dump($identical);

$notIdentical = $n1 !== $n2;
var_dump($notIdentical);

$greater = $n1 > $n2;
var_dump($greater);

$less = $n1 < $n2;
var_dump($less);

$greaterOrEqual = $n1 >= $n2;
var_dump($greaterOrEqual);

$lessOrEqual = $n1 >= $n2;
var_dump($lessOrEqual);

?>