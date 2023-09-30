<?php

    $name = 'John';
    echo $name;
    unset($name);
    echo $name; // warning


    $names = ['John', 'Jane', 'Mary'];
    print_r($names);
    unset($names[1]);
    print_r($names);

    $names = array_values($names); // reindex array
    print_r($names);
?>