<?php
/*
Create a pet management system. Each pet has:
- name 
- species 
- age 
- breed 
- weight 
- petId 

Display basic pet information including name, species, and age.
*/
//Pet Care System
class Pet{
    public $name;
    public $species;
    public $age;
    public $breed;
    public $weight;
    public $petId;

    public function showDetails(){
        echo "Name: $this->name\n Species: $this->species\n Age: $this->age years\n";
    }
}

$pet1 = new Pet();
$pet1->name = "Buddy\n";
$pet1->species = "Dog\n";
$pet1->age = 3 ."\n";
$pet1->breed = "Golden Retriever\n";
$pet1->weight = 28.5 ."\n";
$pet1->petId = "PET001\n";

$pet1->showDetails();