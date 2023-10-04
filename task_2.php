<?php 


class Product {
    private $price;

    public function __construct($price) {
        $this->price = $price;
    }

    public function getFormattedPrice() {
      
        return number_format($this->price, 2);
    }
}

$product = new Product(19.99);
$formattedPrice = $product->getFormattedPrice();
echo "Formatted Price: $formattedPrice";




?>