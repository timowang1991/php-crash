<?php
    $x = 123; // becomes global variable and can be accessed everywhere (not a preferred way to do this)

    function foo() {
        echo $x . '<br>';  // Warning: Undefined variable $x
    }

    foo();
?>

<?php
    $x = 123;

    function foo2() {
        global $x;
        echo $x . '<br>';
        $x++;
    }

    foo2();

    echo $x . '<br>';
?>