<?php
/*
Design an inventory system for products. Each product has:
- productName
- quantity
- unitPrice
- supplier
- lastUpdated
- productCode

Show product details including name, quantity, and price.
*/

//Inventory Management System
class Product{
    public $productName;
    public $quantity;
    public $unitPrice;
    public $supplier;
    public $lastUpdated;
    public $productCode;

    public function showDetails(){
        echo "Product Name: $this->productName\n Quantity: $this->quantity\n Unit Price: $this->unitPrice\n";
    }
}

$product1 = new Product();
$product1->productName = "Laptop\n";
$product1->quantity = 25;
$product1->unitPrice = 55000;
$product1->supplier = "Tech Supplier";
$product1->lastUpdated = "2024-01-20";
$product1->productCode = "INV001";

$product1->showDetails();