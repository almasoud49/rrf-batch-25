<?php
class Person{
    public $name;
    public $age;

    public function __construct($studentName, $studentAge){
        $this->name = $studentName;
        $this->age = $studentAge;

    }

   
   
    public function showInfo(){
        echo "Name: $this->name\n Age: $this->age\n";
    }

}



$student1 = new Person("Abdur Rahman", 25);

$student1->showInfo();

