<?php
/*
Create a system to manage vehicle information. Each vehicle has:
- brand name
- model 
- year (manufacturing year)
- color
- mileage
- vin (vehicle identification number)

Display basic vehicle information including make, model, and year.
*/

//Vehicle Management System
class Vehicle{
    public $brand;
    public $model;
    public $year;
    public $color;
    public $mileage;
    public $vin;

    public function showDetails(){
        echo "Brand: $this->brand\n Model: $this->model\n Year: $this->year\n";
    }

}

$vehicle1 = new Vehicle();
$vehicle1->brand = "Toyota\n";
$vehicle1->model = "Camry\n";
$vehicle1->year = 2022 ."\n";
$vehicle1->color = "Blue\n";
$vehicle1->mileage = 15000 ."\n";
$vehicle1->vin ="VIN123456789\n";

$vehicle1->showDetails();

