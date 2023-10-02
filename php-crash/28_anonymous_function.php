<?php
    $multiple = function ($num) {
        return $num * 2;
    };
    echo $multiple(5) . '<br>';

    $multiple = function ($num) {
        return $num * 3;
    };
    echo $multiple(5) . '<br>';

    function sum($a, $b, callable $callback) {
        return $callback($a + $b);
    }

    echo sum(10, 3, $multiple) . '<br>';

    $multiplier = 2;
    $multiple = function ($num) use ($multiplier) {
        return $num * $multiplier;
    };
    echo sum(100, 3, $multiple) . '<br>';
    echo $multiplier . '<br>';

    $multiple = fn($num) => $num * $multiplier; // only 1 line of code
    echo sum(500, 3, $multiple) . '<br>';

    function anotherMultiply($num) {
        return $num * 2;
    }

    echo sum(5, 2, 'anotherMultiply') . '<br>'; // can pass as a string
?>