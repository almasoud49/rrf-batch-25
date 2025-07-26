<?php
/*
Build a fitness tracking system. Each workout has:
- exerciseType 
- duration 
- caloriesBurned 
- date 
- intensity 
- workoutId 

Show complete workout profile with all workout details.
*/

//Fitness Tracker System
class Workout{
    public $exerciseType;
    public $duration;
    public $caloriesBurned;
    public $date;
    public $intensity;
    public $workoutId;

    public function showProfile(){
        echo "Exercise Type: $this->exerciseType\n Duration: $this->duration mins\n Calories Burned: $this->caloriesBurned\n Date: $this->date\n Intensity: $this->intensity\n Workout ID: $this->workoutId\n";
    }
}

$workout1 = new Workout();
$workout1->exerciseType = "Running\n";
$workout1->duration = 45 . "\n";
$workout1->caloriesBurned = 420 . "\n";
$workout1->date = "2024-01-15\n";
$workout1->intensity = "High\n";
$workout1->workoutId = "FIT001\n";

$workout1->showProfile();