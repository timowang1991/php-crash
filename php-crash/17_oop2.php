<?php

declare(strict_types=1);

class Account {
    // public string $name;
    // public int $balance = 5;

    // public function __construct(string $newName, float $newBalance) {
    //     $this->name = $newName;
    //     $this->balance = $newBalance;
    // }

    // shorthand syntax
    public function __construct(
        public string $newName,
        public float $newBalance
    ) {}

    public function deposit(float $amount) {
        $this->newBalance += $amount;
        return $this;
    }
}

$myAccount = new Account('My Account', 10);
$johnsAccount = new Account('John Doe', 100);

var_dump($myAccount);
echo '<br>';
var_dump($johnsAccount);
echo '<br><br>';

// $myAccount->balance = 10;
$myAccount->deposit(100)->deposit(100);
var_dump($myAccount);
echo '<br>';
var_dump($johnsAccount);
echo '<br><br>';