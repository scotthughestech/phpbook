<!doctype html>
<html>
    <head>
        <title>Associative Arrays</title>
    </head>
    <body>
        <?php
        
        // Create first product
        $product1 = [
            'name' => 'Ball',
            'price' => 2
        ];
        
        // Create second product
        $product2 = [
            'name' => 'Glove',
            'price' => 20
        ];
        
        // Create products array
        $products = [ $product1, $product2 ];
        
        // Var_dump products array
        echo '<pre>';
        var_dump($products);
        echo '</pre>';
        
        ?>
    </body>
</html>