<?php


interface Payment{
    public function pay($amount);
    
}

class PayPal implements Payment{
    public function pay($amount){
        echo "Paid $$amount via PayPal\n";
    }
}

class Stripe implements Payment{
     public function pay($amount){
           echo "Paid $$amount via Stripe\n";
    }
  
}


$paypal = new PayPal();
$paypal->pay(100);

$stripe= new Stripe();
$stripe->pay(200);

//Pillars of OOp
//Inheritance
//Abstraction
//Encapsulation
//Polymorphism