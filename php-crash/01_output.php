<?php
    echo 'Hello123'; // php needs ";"
    echo 123, 'hello', 10.5;
    // single-line comment

    /* multi-line comment
    echo 1;
    echo 2;
    */

    print 123; // cannot print multi values, use echo instead

    print_r('Hello print_r'); // prints single values and arrays
    print_r([1,2,3]);

    var_dump('Hello'); // returns data type and length

    var_export('Hello'); // similar to var_dump()
    var_export(123);
?>

<html>
<head>
</head>
<body>
    <h1><?php echo 'Post One'; ?></h1>
    <!-- shorthand -->
    <h1><?= 'Post One'; ?></h1>
</body>
</html>