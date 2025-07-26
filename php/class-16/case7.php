<?php
/*
Build a movie management system. Each movie has:
- title
- director
- releaseYear
- genre
- duration (in minutes)
- rating

Display movie information with title, director, and release year.
*/

//Movie Database System
class Movie{
    public $title;
    public $director;
    public $releaseYear;
    public $genre;
    public $duration;
    public $rating;

    public function showDetails(){
        echo "Movie Title: $this->title\n Director: $this->director\n Release Year: $this->releaseYear\n";
    }
}

$movie1 = new Movie();
$movie1->title = "Inception\n";
$movie1->director = "Christopher Nolan\n";
$movie1->releaseYear = 2010 . "\n";
$movie1->genre = "Sci-Fi\n";
$movie1->duration = 148 . "\n";
$movie1->rating = 8.8 . "\n";

$movie1->showDetails();