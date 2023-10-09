<?php

declare(strict_types=1);

class Account {
    public const INTEREST_RATE = 2;
    public static int $count = 0;
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
    ) {
        // self points to the class instead of an instance
        self::$count++;
    }

    public function deposit(float $amount) {
        $this->newBalance += $amount;
        return $this;
    }

    public static function printArr(array $array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
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

// access const in a class
var_dump(Account::INTEREST_RATE);
echo '<br>';

// access static
var_dump(Account::$count);
echo '<br>';

var_dump($myAccount::$count);
echo '<br>';

Account::printArr([1, 2, 3]);
echo '<br>';