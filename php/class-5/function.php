<?php

//Function declaration
function greet(){
    echo "Hello, Future Developers! \n";
}

greet();

//Function with parameter
function add($n1, $n2){
    return $n1 + $n2 ;
}

echo add(10,10) ."\n";

//Function with default parameter
function addParam($n1, $n2=5){    
    return $n1 + $n2 ;
}

echo addParam(10,20) ."\n";

//Function with  local and global scope

$globalVar = "Global"; //Global variable
function testScope(){
    $local = "Abdullah Al Masoud"; //Local variable
    global $globalVar;
    echo $globalVar . "\n";
    echo $local . "\n";    
}

echo testScope() ."\n";

//Annonymous Function
$greet = function (){
    echo "Hello, Future Developers! \n";
};
echo $greet();

//Arrow function
$add = fn($n1, $n2)=> $n1 + $n2;
echo $add(10,5) ."\n";

//Callback function
function process($callback){
    return $callback("Future Developers");
}

$result = process(function($name) {
    return "Hello, $name!\n";
});

echo $result ;
