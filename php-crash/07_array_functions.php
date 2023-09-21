<?php
    $fruits = ['apple', 'orange', 'pear'];

    // Get length
    echo count($fruits);
    echo '<br>';

    // Search array
    var_dump(in_array('apple', $fruits));
    echo '<br>';

    /// Add to array
    $fruits[] = 'grape';
    array_push($fruits, 'blueberry', 'strawberry');
    
    print_r($fruits);
    echo '<br>';

    array_unshift($fruits, 'mango');
    print_r($fruits);
    echo '<br>';

    // Remove from array
    array_pop($fruits);
    print_r($fruits);
    echo '<br>';

    array_shift($fruits);
    print_r($fruits);
    echo '<br>';

    unset($fruits[2]);
    print_r($fruits);
    echo '<br>';

    // split into 2 chunks
    $chunked_array = array_chunk($fruits, 2);
    print_r($chunked_array);
    echo '<br>';

    // concat
    $arr1 = [1,2,3];
    $arr2 = [4,5,6];
    $arr3 = array_merge($arr1, $arr2);
    print_r($arr3);
    echo '<br>';
    
    $arr4 = [...$arr1, ...$arr2];
    print_r($arr4);
    echo '<br>';
    
    // key: value
    $a = ['green', 'red', 'yellow'];
    $b = ['avacado', 'apple', 'banana'];
    $c = array_combine($a, $b);
    print_r($c);
    echo '<br>';
    
    $keys = array_keys($c);
    print_r($keys);
    echo '<br>';
    
    $flipped = array_flip($c);
    print_r($flipped);
    echo '<br>';
    
    $numbers = range(1, 20);
    print_r($numbers);
    echo '<br>';
    
    // map
    $newNumbers = array_map(function($number){
        return "Number ${number}";
    }, $numbers);
    print_r($newNumbers);
    echo '<br>';
    
    // filter
    $lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
    print_r($lessThan10);
    echo '<br>';
    
    // reduce
    $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
    var_dump($sum);
    echo '<br>';
?>