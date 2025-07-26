<?php
/*
Design a hotel room management system. Each room has:
- roomNumber 
- roomType 
- pricePerNight 
- floor 
- capacity 
- roomId 

Display room details including room number, type, and price.
*/
//Hotel Booking System

class Room{
    public $roomNumber;
    public $roomType;
    public $pricePerNight;
    public $floor;
    public $capacity;
    public $roomId;

    public function showDetails(){
        echo "Room Number: $this->roomNumber\n Room Type: $this->roomType\n Price Per Night: $this->pricePerNight\n";
    }
}

$room1 = new Room();
$room1->roomNumber = 101 ."\n";
$room1->roomType = "Deluxe Suite\n";
$room1->pricePerNight = 2500 ."\n";
$room1->floor = 1 ."\n";
$room1->capacity = 4 ."\n";
$room1->roomId = "HOT001\n";

$room1->showDetails();