<?php

$cup = 'empty';

function fillCup(&$cupParam) { // & is here
    $cupParam = 'filled';
}

fillCup($cup);

echo $cup . '<br>';

?>