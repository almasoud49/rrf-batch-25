<?php
class Product{
    public $name;
    private $price;
    
   public function productInfo(){
    echo $this->price=20000 ."\n";
    }
}

$product1 = new Product();
$product1->name="Mobile\n";
echo $product1->name;
$product1->productInfo();
