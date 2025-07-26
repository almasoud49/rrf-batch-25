<?php
/*
Create a social media management system. Each post has:
- content
- author
- timestamp
- likes 
- shares
- postId

Display basic post information including content, author, and likes.
*/

//Social Media Post System
class Post{
    public $content;
    public $author;
    public $timestamp;
    public $likes;
    public $shares;
    public $postId;

    public function showDetails(){
        echo "Content: $this->content\n Author: $this->author\n Likes: $this->likes\n";
    }
}

$post1 = new Post();
$post1->content = "Enjoying the beautiful weather today!\n";
$post1->author = "Emma Watson";
$post1->timestamp = "2024-01-15 14:30:00";
$post1->likes = 156;
$post1->shares = 23;
$post1->postId = "POST001";

$post1->showDetails();