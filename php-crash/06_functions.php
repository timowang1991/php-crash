<?php
    $y = 12;

    function registerUser($email) {
        global $y;  // need to define global if we want to use the $y outside the function
        echo $y;
        echo '<br>';
        $x = 10;
        echo 'User registered';
        echo '<br>';
        echo "$email registered";
        echo '<br>';
    }

    echo $x;  // cannot access $x inside the function
    registerUser('Brad');

    function sum($n1 = 4, $n2 = 5) {
        return $n1 + $n2;
    }

    $number = sum(10, 3);
    echo $number;
    echo '<br>';

    $subtract = function($n1, $n2) { // anonymous function
        return $n1 - $n2;
    };

    echo $subtract(10, 5);
    echo '<br>';

    $multiple = fn($n1, $n2) => $n1 * $n2; // arrow function
    echo $multiple(10, 5);
?>