/*
Logical AND(&&) Operator
    A       B       A&&B 
    1       1       1
    1       0       0
    0       1       0
    0       0       0

Logical OR(||) Operator
    A       B       A||B 
    1       1       1
    1       0       1
    0       1       1
    0       0       0
*/

<?php
$t = true; //1
$f = false; //0

$and = $t && $f;
var_dump($and);

$or = $t || $f;
var_dump($or);

$not = !$t ;
var_dump($not);

var_dump($t && $f);
var_dump($t || $f);
var_dump(!$t);
