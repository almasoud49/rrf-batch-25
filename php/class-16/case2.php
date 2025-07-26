<?php
/*
Design a student management system. Each student has:
- name
- roll
- grade
- section
- dob
- guardianName

Show student profile with all personal information.
*/

//Student Registration System

class Student{
    public $name;
    public $roll;
    public $grade;
    public $section;
    public $dob;
    public $guardianName;

    public function showProfile(){
        echo "Name: $this->name\n Roll: $this->roll\n Grade: $this->grade\n Section: $this->section\n Date of Birth: $this->dob\n Graduation Nane: $this->guardianName\n";
    }
}

$student1 = new Student();
$student1->name = "Mahin Khan\n";
$student1->roll = 101 ."\n";
$student1->grade = "10th\n";
$student1->section = "A\n";
$student1->dob = "2008-05-15\n";
$student1->guardianName = "Mr. Khan\n";

$student1->showProfile();