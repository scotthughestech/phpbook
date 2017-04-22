<?php    
    class Dog {
        private $name;
        public function setName($name) {
            $this->name = $name;
        }
        private function _addTheDog($name) {
            // Append " the dog" to the name
            return $name . " the dog";
        }
        public function getName() {
            // Fetch the name property
            $name = $this->name;
            // Append the dog to the name
            $newName = $this->_addTheDog($name);
            // Return the new name
            return $newName;
        }
        
    }
?>
<!doctype html>
<html>
    <head>
        <title>Visible</title>
    </head>
    <body>
        <?php
        
        // Create new dog
        $dog = new Dog();
        
        // Set name to Spot
        $dog->setName('Spot');
        
        echo $dog->getName();
        
        ?>
    </body>
</html>