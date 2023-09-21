<?php
    function inverse($x) {
        if (!$x) {
            throw new Exception('Division by zero.');
        }
        return 1 / $x;
    }

    echo inverse(10);
    
    try {
        echo inverse(0);
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    } finally {
        echo 'finally'
    }

    echo 'Hello World';
?>