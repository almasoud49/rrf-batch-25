<?php

//Numbers of iteration are fixed
for($i=5; $i >=1 ;$i--){
echo "$i\n";
}

//Numbers of iteration are unknown
$correctPassword = "12345";
$userInput = "";
while($userInput !== $correctPassword){
$userInput = readline("Provide correct password, please!");
}
