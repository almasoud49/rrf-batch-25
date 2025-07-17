<?php
/*
trait Logger{
    public function log($message){
     echo "$message";
    }
}

trait TimeTracker{
    public function trackTime(){
    echo "Tracking Time:" . date('Y-m-d');
    }
}

class User{
    use Logger, TimeTracker;
    public function createUser($username){
        $this->log("User Name $username has been created\n");
        $this->trackTime();
    }
}

$user1 = new User();
$user1->createUser("Masud");

*/


trait Logger{
    public function log(){
     echo "Logger log method\n";
    }
}

trait TimeTracker{
    public function log(){
    echo "Time Tracker log method\n";
    }
}

class User{
    // use Logger, TimeTracker{
    //      TimeTracker:: log insteadOf Logger;
    // }
    use Logger{
        log as private;
    }
    public function createUser($username){
        echo "User Name $username has been created\n";
        $this->log();
    }
   
}

$user1 = new User();
$user1->createUser("Masud");

/*
Namespace:
project/
        frontEnd/
            Services.php
        backEnd/
            Services.php
namespace project\frontEnd
namespace project\backEnd
*/
