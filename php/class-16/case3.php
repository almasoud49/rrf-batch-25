<?php

/*
Build a menu management system for a restaurant. Each menu item has:
- itemName
- price
- category (appetizer, main, dessert)
- preparationTime (in minutes)
- availability (true/false)
- itemCode

Display menu item details including name, price, and category.
*/

//Restaurant Menu System

class MenuItem{
    public $itemName;
    public $price;
    public $category;
    public $preparationTime;
    public $availability;
    public $itemCode;

    public function showDetails(){
        echo "Item Name: $this->itemName\n Price: $this->price\n Category: $this->category\n";
    }
}

$menu1 = new MenuItem();
$menu1->itemName = "Chicken Burger\n";
$menu1->price = 250 ."\n";
$menu1->category = "Main Course\n";
$menu1->preparationTime = 15 ."\n";
$menu1->availability = true ."\n";
$menu1->itemCode = "MC001\n";

$menu1->showDetails();