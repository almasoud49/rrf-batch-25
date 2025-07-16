<?php

// $fruits = array("Mango", "Jackfruit", "Lirchi");

// echo $fruits[0]; 
// var_dump($fruits);
//print_r($fruits); //Human readable

//Array manipulation
$numbers = [10, 20, 30];
array_push($numbers, 40); //add element as last element
array_unshift($numbers, 5); //add element as first element
array_shift($numbers); //delete first element
array_pop($numbers); //delete last element
// print_r($numbers);

//Associative array

$student = [
    'name' => 'Abdur Rahim', //Here name is key and Abdur Rahim is value
    'age'=> 25,
    'department'=> 'Mathematics',
];

// echo $student['department'] ."\n";
// print_r($student);

//Convert Array
$csv = "Mango, Jackfruit, Litchi";
$fruits = explode("," , $csv); //string to array convert
$fruitStr = implode(",",$fruits);
// print_r($fruits);
// printf($fruitStr);

//Multidimentional array
$students = [
['name'=> 'Abdur Rahim', 'age' => 25],
['name'=> 'Abdul Karim', 'age' => 24],
['name'=> 'Abdul Kaium', 'age' => 23],

];

// print_r($students[0]['name']."\n");
// echo $students[1]['name'];

//Array Serialization
$data = ['name'=> 'Abdur Rahim', 'age'=> 25];
$json = json_encode($data);
$serialized = serialize($data);
print_r($serialized ."\n");
print_r($json);



