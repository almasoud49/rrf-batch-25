<?php

/*
Abstract Class কেন ?
- Common Structure/Codebase enforce করা
- ফিচারে একই Structure এর নতুন ফিচার অ্যাড করা
- যেমনঃ নতুন পেমেন্ট মেথড অ্যাড করা
- Code Maintain করা সহজ
- Security এবং Standard বজায় রাখা


*/

abstract class PaymentGateway{
    abstract public function pay($amount);
    public function refund(){

    }
}

class PayPal extends PaymentGateway{
    public function pay($amount){
        echo "Paid $$amount via PayPal\n";
    }
     public function makeRefund(){
        
    }
}

class Stripe extends PaymentGateway{
     public function pay($amount){
           echo "Paid $$amount via Stripe\n";
    }
}

class Bkash extends PaymentGateway{
    public function pay($amount){
           echo "Paid $$amount via Bkash\n";
    }
}

$paypal = new PayPal();
$paypal->pay(100);

$stripe= new Stripe();
$stripe->pay(200);

$bkash = new Bkash();
$bkash->pay(300);