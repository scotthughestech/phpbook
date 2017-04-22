<?php include 'myfunctions.php'; ?>

<!doctype html>
<html>
    <head>
        <title>Functions</title>
    </head>
    <body>
        <?php
        
        // Set numbers
        $number1 = 100;
        $number2 = 200;
        
        // Get sum
        $sum = sum($number1, $number2);
        
        echo bold($sum);
        
        ?>
    </body>
</html>