<?php

//Logical AND(&&) Operator
$a = 10;
$b = 5;

if($a > 0 && $b > 0){
    echo "Both values are positive.\n";
}else{
    echo "At least one value is not positive.\n";
}

$hasTicket = true;
$isOnTime = true;

if($hasTicket && $isOnTime){
    echo "You can go to the movie.\n";
}else{
    echo "You cannot go to the movie.\n";
}


$isWeatherNice = true;
$isFreeTime = true;
if($isWeatherNice && $isFreeTime){
    echo "I will go to park.\n";
}else{
    echo "I will not go to park.\n";
}

//Logical OR(||) Operator
$x = 10;
$y = -3;
if($x > 0 || $y > 0){
    echo "At least one value is positive.\n";
}else{
    echo "Both values are not positive.\n";
}

$hasCar = true;
$hasBusPass = false;
if($hasCar || $hasBusPass){
    echo "You can get to work.\n";
}else{
    echo "You cannot get to work.\n";
}


$hasFriend = true;
$isWeatherGood = true;
if($hasFriend || $isWeatherGood){
    echo "I will go to play game.\n";
}else{
    echo "I will not go to play game.\n";
}

//Logical XOR(^) Operator
$likesPizza = true;
$likesIceCream = false;
if($likesPizza ^ $likesIceCream){
    echo "You are in the mood for either pizza or ice cream, but not bboth.\n";
}else{
    echo "Either you like both or neither.\n";
}

$hasMovieTicket = true;
$hasConcertTicket = false;
if($hasMovieTicket ^ $hasConcertTicket){
    echo "You can go only one\n";
}else{
    echo "You cannot go none of those or You can go both\n";
}

