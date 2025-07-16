<?php
class Person{
    public $name;
    public $age;
   protected $email="admin@gmail.com";

    public function showInfo(){
        echo "Parent Name: $this->name\n Age: $this->age\n Email: $this->email\n";
    }

}

class Student extends Person{
    public $roll;
    public function showStudentInfo(){
        // parent::showInfo();

        echo "Name: $this->name\n Age: $this->age\n Roll: $this->roll\n Email: $this->email\n";
    }

   
}

$student1 = new Student();
$student1->name="Abdur Rahman";
$student1->age=25;
$student1->roll=101;
$student1->showInfo();
$student1->showStudentInfo();


//Vehicle -->Car, Bus, Truck
//Employee -->Manager, Developer,Designer
//Animal --> Dog, Cat, Lion
//Shape --> Rectangle, Triangle, Polygon

class Shape{
    public $color;
    public function showColor(){
        echo "Color: $this->color";
    }
}
class Rectangle extends Shape{
    public $width;
    public $height;
    public function area(){
        return $this->width * $this->height;
    }
}

$r = new Rectangle();
$r->color="Green";
$r->width=5;
$r->height=10;

// echo "Area of this Rectangle is: " . $r->area();