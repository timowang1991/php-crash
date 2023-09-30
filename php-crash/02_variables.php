<?php
/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes (single or double quotes)
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

    $name = 'Brad';
    $age = 40;
    $has_kids = true; // in php, snake case is more common
    $cash_on_hand = 20.75; // Float
    echo $name;
    echo $age;
    var_dump($has_kids);
    var_dump($cash_on_hand);

    // echo $name . ' is ' . $age . ' years old';
    echo "${name} is ${age} years old";

    $x = '5' + '5'; // 10 (becomes int)
    var_dump($x);

    define('HOST', 'localhost'); // constant definition
    define('DB_NAME', 'dev_db');

    echo HOST . '<br>';
    echo DB_NAME . '<br>';

    echo __LINE__ . '<br>'; // magic constant are ones with __
    echo __LINE__ . '<br>';
    echo __DIR__ . '<br>';
?>