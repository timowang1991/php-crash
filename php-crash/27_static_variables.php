<?php

    function foo() {
        static $a = 1;

        return $a++;
    }

    echo foo() . '<br>';
    echo foo() . '<br>';
    echo foo() . '<br>';
?>