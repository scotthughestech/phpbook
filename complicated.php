<!doctype html>
<html>
    <head>
        <title>Complicated</title>
    </head>
    <body>
        <?php
        
        // Set animal
        $animal = 'camel';
        
        // Output sound
        /*if ($animal == 'cat') {
            echo 'Meow';
        } elseif ($animal == 'dog') {
            echo 'Bark';
        } elseif ($animal == 'lion') {
            echo 'Roar';
        } else {
            echo 'Meep';
        }*/
        
        switch ($animal) {
            case 'cat':
                echo 'Meow';
                break;
            case 'dog':
                echo 'Bark';
                break;
            case 'lion':
                echo 'Roar';
                break;
            default:
                echo 'Meep';
        }
        
        ?>
    </body>
</html>