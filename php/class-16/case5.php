<?php
/*
Design an order management system. Each order has:
- orderId
- customerName
- orderDate
- totalAmount
- status (pending, shipped, delivered)
- shippingAddress

Display order summary with ID, customer name, and total amount.
*/

//E-commerce Order System
class Order{
    public $orderId;
    public $customerName;
    public $orderDate;
    public $totalAmount;
    public $status;
    public $shippingAddress;

    public function showDetails(){
        echo "Order ID: $this->orderId\n Customer Name: $this->customerName\n Total Amount: $this->totalAmount\n";
    }
}

$order1 = new Order();
$order1->orderId = "ORD001\n";
$order1->customerName = "Tamim\n";
$order1->orderDate = "2024-01-15\n";
$order1->totalAmount = 1500 ."\n";
$order1->status = "Shipped\n";
$order1->shippingAddress = "Mirpur, Dhaka\n";

$order1->showDetails();