<?php

declare(strict_types=1);

require_once '32_namespace.php';

// $myAccount = new Account('john', 20); // error: because not specifying the namespace
// $myAccount = new App\Account('john', 20); // specify App namespace

// use App\Account;
// $myAccount = new Account('john', 20);

// var_dump($myAccount);
// echo '<br>';

use App\{Account, SocialMedia}; // multiple classes import from multiple namespaces
$myAccount = new Account('john', 20);
$socialMedia = new SocialMedia('facebook');

var_dump($myAccount);
echo '<br>';
var_dump($socialMedia);
echo '<br>';

?>