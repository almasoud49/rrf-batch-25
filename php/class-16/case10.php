<?php

/*
Design a weather monitoring system. Each weather record has:
- location 
- temperature
- humidity
- condition
- windSpeed 
- weatherId 

Display weather information including location, temperature, and condition.
*/
//Weather Monitoring System

class Weather{
    public $location;
    public $temperature;
    public $humidity;
    public $condition;
    public $windSpeed;
    public $weatherId;

    public function showDetails(){
        echo "Location: $this->location\n Temperature: $this->temperature\n Condition: $this->condition\n";
    }
}

$weather1 = new Weather();
$weather1->location = "Dhaka\n";
$weather1->temperature = 28.5 ."\n";
$weather1->humidity = 75 ."\n";
$weather1->condition = "Partly Cloudy\n";
$weather1->windSpeed = 12 ."\n";
$weather1->weatherId = "WTH001\n";

$weather1->showDetails();