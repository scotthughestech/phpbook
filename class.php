<?php
class Product
{
    public $name;
    public $price;
    public function __construct($name, $price) {
        // Assign variables to properties
        $this->name = $name;
        $this->price = $price;
    }
    public function withTax() {
        return $this->price * 1.05;
    }
}
?>
<!doctype html>
<html>
    <head>
        <title>Class</title>
    </head>
    <body>
        <?php
        
        // Create two products
        $product1 = new Product('Shoe', 15);
        $product2 = new Product('Coat', 50);
        
        // Echo name and price of product 1
        echo $product1->name;
        echo $product1->price;
        echo $product1->withTax();
        
        // Echo name and price of product 2
        echo $product2->name;
        echo $product2->price;
        echo $product2->withTax();
        
        ?>
    </body>
</html>