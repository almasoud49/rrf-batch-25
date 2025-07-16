<?php
interface Payment {
    public function pay($amount);
}

class PayPal implements Payment {
    public function pay($amount) {
        echo "Paid $$amount via PayPal\n";
    }
}

class Stripe implements Payment {
    public function pay($amount) {
        echo "Paid $$amount via Stripe\n";
    }
}

$gateways = [new PayPal(), new Stripe()];
foreach($gateways as $gateway){
    $gateway->pay(500);
}