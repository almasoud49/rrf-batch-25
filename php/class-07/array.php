<?php
$fruits = ["Mango", "Jackfruit", "Litchi"];
//foreach()
foreach($fruits as $fruit){
    // echo $fruit ."\n";
}

$person = [
    'name'=> 'Abdullah Al Masoud',
    'city'=> 'Dhaka',
    'phone'=> '0192229999'

];

foreach($person as $key => $value){
// echo "$key : $value \n";
}
// print_r($person); 

$person = [
    'name'=> 'Abdullah Al Masoud',
    'city'=> 'Dhaka',
    'phone'=> '0192229999'

];

// unset($person['name']);
// print_r($person);

$data = ['Mango','',null];
//array_filter()
$filtered = array_filter($data);
// print_r($filtered);

$user = [
    'name'=> 'Masud',
    'email'=> 'masud@yahoo.com'
];
//extract()
// extract($user);
// echo $name ."\n";
// echo $email;

//range()
$numbers = range(1,15);

//array_slice()
$sliced = array_slice($numbers, 4, 1); //whom, from where, how many
// print_r($numbers);
// print_r($sliced);

//array_merge()
$arr1 = ['Mango','Jackfruit'];
$arr2 = ['Litchi','Pineapple'];
$merged = array_merge($arr1, $arr2);
// print_r($merged);

//in_array()
$fruits = ['Mango', 'Jackfruit'];
if(in_array('Litchi',$fruits)){
    echo "Found";
}else{
    // echo "Not Found";
};

$arr1 = ['Mango','Litchi'];
$arr2 = ['Litchi','Pineapple'];

//array_diff()
$difference = array_diff($arr1, $arr2);
print_r($difference);

//range()
$numbers = range(2,15,2); //starting point, ending point, difference

print_r($numbers);