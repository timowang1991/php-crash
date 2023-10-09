<?php

declare(strict_types=1);

spl_autoload_register(function ($class) {
    $formattedClass = str_replace('\\', '/', $class);
    $path = "{$formattedClass}.php";
    
    require_once $path;
});

$myAccount = new Account('john', 20);
var_dump($myAccount);

?>