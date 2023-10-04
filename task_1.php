<?php




class Product {
    private $id;
    private $name;
    private $price;
    
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    
  
    
    public function getProductInfo() {
        return "ID: " . $this->id . ", Name: " . $this->name . ", Price: $" . $this->price;
    }
}


$product = new Product(1, "T-shirt", 10.99);


echo $product->getProductInfo(); 
