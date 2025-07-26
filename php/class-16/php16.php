<?php
/*
Design an event management system. Each event has:
- eventName 
- date 
- venue 
- organizer 
- attendees 
- eventId 

Display event details including name, date, and venue.
*/

//Event Management System
class Event{
    public $eventName;
    public $date;
    public $venue;
    public $organizer;
    public $attendees;
    public $eventId;

    public function showDetails(){
        echo "Event Name: $this->eventName\n Date: $this->date\n Venue: $this->venue\n";
    }
}

$event1 = new Event();
$event1->eventName = "Tech Conference 2024\n";
$event1->date = "2024-03-15\n";
$event1->venue = "Convention Center\n";
$event1->organizer = "Tech Events Ltd\n";
$event1->attendees = 500 ."\n";
$event1->eventId = "EVT001\n";

$event1->showDetails();