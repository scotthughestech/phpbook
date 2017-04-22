<?php

class Animal {
    public function __construct() {
        echo 'created animal class<br>';
    }
    public function getNoise() {
        return 'Animal noise';
    }
}

class Cat extends Animal {
    public function __construct() {
        // Call parent's constructor
        parent::__construct();
        echo '...then created cat class<br>';
    }
    public function getNoise() {
        return 'MEOW!!!';
    }
}

class Fluffy extends Cat {
    
}

?>
<!doctype html>
<html>
    <head>
        <title>Inheritance</title>
    </head>
    <body>
        <?php
        
        // Create new animal object
        $animal = new Animal();
        
        // Create new cat object
        $cat = new Cat();
        
        // Output animal noise
        echo "Animal says: " . $animal->getNoise() . "<br>";
        
        // Output cat noise
        echo "Cat says: " . $cat->getNoise() . "<br>";
        
        // Create new fluffy object
        $fluffy = new Fluffy();
        echo "Fluffy also says: " . $fluffy->getNoise();
        
        ?>
    </body>
</html>