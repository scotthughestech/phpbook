<!doctype html>
<html>
    <head>
        <title>Foreach Loops</title>
    </head>
    <body>
        <?php
        // Create a products array
        $products = [];

        // Create several products
        $products[] = [
            'name' => 'Ball',
            'price' => 2,
        ];

        $products[] = [
            'name' => 'Glove',
            'price' => 20
        ];

        // Loop through the products
        /* foreach ($products as $product) {
          echo $product['name'];
          echo $product['price'];
          echo '<br>';
          } */

        $n = count($products);
        for ($i = 0; $i < $n; $i++) {
            $product = $products[$i];
            echo $product['name'];
            echo $product['price'];
            echo '<br>';
        }
        ?>
    </body>
</html>