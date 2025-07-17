<?php
//Single Array
$foods= array('Rice','Fish','Meat');

//Nested Array
$fruitBasket = array(
    "Citrus Fruit" => array("Orange","Lemon","Grapefruit"),
    "Berries"=> array("Strawberry", "Blueberry", "Raspberry"),
    "Tropical Fruits"=> array("Mango", "Pineapple", "Banana")
);

echo "Citrus Fruits: " . implode(",", $fruitBasket['Citrus Fruit']) . "\n";
echo "Berries: " . implode(",", $fruitBasket['Berries']) . "\n";
echo "Tropical Fruits: " . implode(",", $fruitBasket["Tropical Fruits"]) . "\n";

//Numerical Array
$foodItems = array("Pizza","Burger", "Pasta", "Salad", "Sushi");
echo "Dish 1: " . $foodItems[0] . "\n";
echo "Dish 2: " . $foodItems[1] . "\n";
echo "Dish 3: " . $foodItems[2] . "\n";
echo "Dish 4: " . $foodItems[3] . "\n";
echo "Dish 5: " . $foodItems[4] . "\n";

//Associative Array
$menu = array(
    "steak"=> "Grilled Steak",
    "wings"=> "Buffalo Chicken Wings",
    "fries"=> "Crispy French Fries",
    "salad"=> "Fresh Garden Salad",
    "soup" => "Chicken Noodle Soup"
);

echo "Dish 'steak': " . $menu['steak'] . "\n";
echo "Dish 'wings': " . $menu['wings'] . "\n";
echo "Dish 'fries': " . $menu['fries'] . "\n";
echo "Dish 'salad': " . $menu['salad'] . "\n";
echo "Dish 'soup': " . $menu['soup'] . "\n";

//Hybrid Array
$menus = array(
    1=> "Margherita Pizza",
    2=> "Spaghetti Carbonara",
    "special" => "Grilled Salmon",
    "dessert"=> "Chocolate Lava Cake"
);

echo "Dish with index 1: " . $menus[1] . "\n";
echo "Dish with index 2: " . $menus[2] . "\n";
echo "Special Dish: " .$menus['special'] . "\n";
echo "Dessert: " .$menus['dessert'] . "\n";

//var_dump()
$fruits = array("apple"," banana", "orange");
var_dump($fruits);


//print_r()
$fruits = array("apple"," banana", "orange");
print_r($fruits);

//foreach
$fruits = array("apple","banana", "orange");
foreach($fruits as $fruit){
    echo $fruit . "\n";
}

//Associative Array:foreach
$student = [
    "name" => "John",
    "age" => 25,
    "grade" => 'A'
];

foreach($student as $key => $value){
    echo "$key : $value" . "\n";
}

//Nested Array - foreach()
$students = [
    ["name" => "John", "age" => 20, "grade" => "A"],
    ["name" => "Alice", "age" => 22, "grade" => "B"],
    ["name" => "Bob", "age" => 19, "grade" => "C"],
];

foreach($students as $student){
    foreach($student as $key => $value){
        echo $key . ":". $value . "\n";
    }
}

//Index Array with key
$numbers = [10,20,30,40];
foreach($numbers as $index => $number){
    echo "Index " . $index . ":" . $number . "\n";
}

//Multidimentional Numerical Array
$matrix = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
foreach($matrix as $row){
    foreach($row as $element){
        echo $element . "\n";
    }
}