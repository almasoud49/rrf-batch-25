<?php
$firstExam = 80;
$secondExam = 75;

if($firstExam > $secondExam){
    echo "Thi first exam result is higher.\n";
}else{
    echo "Thi first exam result is not higher.\n";
}


$price1 = 15;
$price2= 20;
if($price1 == $price2){
    echo "The price are equal\n";
}else{
    echo "The price are not equal\n";
}

//Real Life Examples:
//Cinema Ticket
$ticket1 = 3;
$ticket2 = 3;

if($ticket1 == $ticket2){
    echo "The tickets are equal\n";
}else{
    echo "The tickets are not equal\n";
}

//Score Comparison
$score1= 80;
$score2= 80;

if($score1 == $score2){
    echo "The scores are equal\n";
}else{
    echo "The scores are not equal\n";
}

//Not Equal(!=)
$color1 = "Red";
$color2= "Green";

if($color1 != $color2){
    echo "The colors are not the same\n";
}else{
    echo "The colors are the same\n";
}

//Real Life Examples
//Class Exam
$grade1 = 'A';
$grade2 = 'B';

if($grade1 != $grade2){
    echo "Grades are not equal\n";
}else{
    echo "Grades are equal\n";
}

//Product price
$p1 = 50;
$p2 = 30;
if($p1 != $p2){
    echo "Prices are not equal\n";
}else{
    echo "Prices are equal\n";
}

//Identical Operator
$number1 = 25;
$number2 = '25';
if($number1 === $number2){
    echo "The values and their types are identical.\n";
}else{
    echo "The values and their types are not identical.\n";
}

//Real Life Examples:
$person1_age = 25;
$person2_age ='25';
if($person1_age === $person2_age){
    echo "Details are identical\n";
}else{
    echo "Details are not identical\n";
}

$model1 = 'X100';
$model2 = 'X100';
if($model1 === $model2){
    echo "Models are identical\n";
}else{
    echo "Models are not identical\n";
}

$n1 = 30;
$n2 = '30';
if($n1 !==$n2){
    echo "The values and/or their types are not identical.\n";
}else{
    echo "The values and/or their types are identical.\n";
}

$age1 = 30;
$age2= '30';
if($age1 !== $age2){
    echo "Ages are not identical\n";
}else{
    echo "Ages are identical\n";
}

$status1 = 'Active';
$status2 = 'active';

if($status1 !==$status2){
    echo "Status bars are not identical.\n";
}else{
    echo "Status bars are identical.\n";
}

$number1 = 10;
$number2 = 20;
if($number1 < $number2){
    echo "$number1 is less than $number2\n";
}else{
    echo "$number1 is not less than $number2\n";
}

$age1 = 16;
$age2 = 21;
if($age1 < $age2){
    echo "Age is less\n";
}else{
    echo "Age is not less\n";
}

$price1 = 200;
$price2 = 300;
if($price1 < $price2){
    echo "Phone price is lower\n";
}else{
    echo "Phone price is not lower\n";
}

$number1 = 15;
$number2 = 10;
if($number1 > $number2){
    echo "$number1 is greater than $number2\n";
}else{
    echo "$number1 is not greater than $number2\n";
}

$score1 = 85;
$score2= 70 ;
if($score1 >$score2){
    echo "Score is higher\n";
}else{
    echo "Score is not higher\n";
}

$temp1 = 30;
$temp2 = 25;
if($temp1 > $temp2){
    echo "Temperature is higher\n";
}else{
    echo "Temperature is higher\n";
}

$price = 250;
$budget = 300;
if($price <= $budget){
    echo "Mina will buy the book\n";
}else{
    echo "Mina will not buy the book\n";
}

$age = 18;
$limit = 21;
if($age <= $limit){
    echo "You are the within the age limit\n";
}else{
    echo "You are not the within the age limit\n";    
}

$fee = 150;
$budget = 200;
if($fee <=$budget){
    echo "Fee is within budget\n";
}else{
    echo "Fee is not within budget\n";
}

$price = 250;
$budget = 300;
if($price >= $budget){
    echo "Mina will buy the book\n";
}else{
    echo "Mina will not buy the book\n";
}

$salary = 5000;
$minSalary = 4500;
if($salary >= $minSalary){
    echo "Salary meets the criteria\n";
}else{
    echo "Salary does not meet the criteria\n";
}

$currentVersion = 2.3;
$requiredVersion = 2.2;
if($currentVersion >= $requiredVersion){
    echo "Application is up to date\n";
}else{
    echo "Application is not up to date\n";
}

//Spaceship Operator(<=>)
$studentScore = 88;
$gradeThreshold = 85;
$result = $studentScore<=>$gradeThreshold;
if($result ===1){
    echo "Student's score is above the grade threshold.\n";
}elseif($result ===0){
    echo "Student's score is exactly at the grade threshold.\n";
}else{
    echo "Student's score is below the grade threshold.\n";
}

$guestAge = 28;
$ageLimit = 30;
if($guestAge <=>$ageLimit){
    echo "Guest is invited in the party\n";
}elseif($guestAge <=> $ageLimit){
    echo "Guest age is under limit\n";
}else{
    echo "Guest is not invited in the party\n";
}