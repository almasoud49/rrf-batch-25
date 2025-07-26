<?php
/*
Create a music management system. Each song has:
- title 
- artist 
- duration 
- album 
- genre 
- songId 

Display basic song information including title, artist, and duration.
*/

//Music Playlist System
class Song{
    public $title;
    public $artist;
    public $duration;
    public $album;
    public $genre;
    public $songId;

    public function showDetails(){
        echo "Title: $this->title\n Artist: $this->artist\n Duration: $this->duration seconds\n";
    }
}

$song1 = new Song();
$song1->title = "Bohemian Rhapsody\n";
$song1->artist = "Queen\n";
$song1->duration = 354 ."\n";
$song1->album = "A Night at the Opera\n";
$song1->genre = "Rock\n";
$song1->songId = "MUS001\n";

$song1->showDetails();