<?php
/*
Create a library management system. Each book has:
- title
- author
- publicationYear
- genre
- totalPages
- bookId

Show book information with title, author, and publication year.
*/

//Library Book System

class Book{
    public $title;
    public $author;
    public $publicationYear;
    public $genre;
    public $totalPages;
    public $bookId;

    public function showDetails(){
        echo "Book Title: $this->title\n Author Name: $this->author\n Publication Year: $this->publicationYear\n";
    }
}

$book1 = new Book();
$book1->title = "PHP Programming\n";
$book1->author = "John Smith\n";
$book1->publicationYear = 2023 ."\n";
$book1->genre = "Technical\n";
$book1->totalPages = 450 ."\n";
$book1->bookId = "LIB001\n";

$book1->showDetails();