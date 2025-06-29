<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 01</title>
</head>
<body style="font-size: 40px; margin-left: 100px;">
    <?php
        echo "Hi, Future Developers!<br>";
        
        // Variables
        $name = "Abdullah Al Masoud<br>";
        echo $name;
        
        // $123 --> Invalid (variable names cannot start with a number)
        // $11 --> Reserved keyword
        
        // Best Practices:
        // $my_name --> Snake_case (used for variables/functions)
        // $myName --> camelCase (used for methods)
        // $MyName --> PascalCase (used for classes)
        
        $name = "Abdullah<br>";
        echo $name;
        
        // Constants
        define("PI", 3.1416); // Constant names are uppercase by convention
        echo PI . "<br>";
        echo "PI<br>"; // Can be written inside or outside quotes
        
        // Expressions and Statements
        $x = 10; // This line is a statement; $x and 10 are expressions
        
        /* Data Types:
           Scalar Types (single value):
           - Integer
           - Float/Double
           - String
           - Boolean
           
           Compound Types (multiple values):
           - Array
           - Object
           
           Special Types:
           - Null
           - Resource
        */
        
        $age = 25; // Integer
        $price = 40.43; // Float/Double
        $myName = "Abdullah Al Masoud"; // String
        $is_user = true; // Boolean
        $fruits = ["Mango", "Banana", 27]; // Array
        echo $fruits[1] . "<br>";
        
        // $user1 = new User(); // Object
        $variable = NULL; // Null (used for default values like coupons)
        // $file = fopen("test.txt", "r"); // Resource
        
        echo is_int($price) . "<br>";
        
        // Arithmetic Operators
        $a = 15;
        $b = 4;
        $addition = $a + $b . "<br>";
        $subtraction = $a - $b . "<br>";
        $multiplication = $a * $b . "<br>";
        $division = $a / $b . "<br>";
        $modulus = $a % $b . "<br>";
        $exponentiation = $a ** $b . "<br>";
        
        echo $addition;
        echo $subtraction;
        echo $multiplication;
        echo $division;
        echo $modulus;
        echo $exponentiation;
        
        // Assignment Operators
        $a = 10;
        $a += 2; // Equivalent to $a = $a + 2;
        echo $a . "<br>";
        
        $a -= 2; // Equivalent to $a = $a - 2;
        echo $a . "<br>";
        
        $a *= 2; // Equivalent to $a = $a * 2;
        echo $a . "<br>";
        
        $a /= 2; // Equivalent to $a = $a / 2;
        echo $a . "<br>";
        
        $a %= 2; // Equivalent to $a = $a % 2;
        echo $a . "<br>";
    ?>
</body>
</html>