<?php

function example() {
    echo 'Example called!';

    return true
}

var_dump(true && true);
var_dump(false && true);

var_dump(false && example()); // does not run example()

?>