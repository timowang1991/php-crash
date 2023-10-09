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
        private string $newName,
        private float $newBalance
    ) {
        // self points to the class instead of an instance
        self::$count++;
    }

    public function deposit(float $amount) {
        $this->newBalance += $amount;
        return $this;
    }

    public function getBalance() {
        return "$" . $this->newBalance;
    }

    public function setBalance(float $newBalance) {
        if ($newBalance < 0) {
            return;
        }
        
        $this->newBalance = $newBalance;
        $this->sendEmail();
    }

    private function sendEmail() {
        echo 'Email Sent';
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

echo $myAccount->getBalance();
echo '<br>';

$myAccount->setBalance(20);
echo '<br>';

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

// final class Toaster // final can stop this class from being extended
class Toaster {
    protected int $slots;

    public function __construct(int $slots) {
        $this->slots = $slots;
    }

    // final public function toast() {  // final can stop this method from being overriden
    public function toast() {
        echo "Toasting {$this->slots} bread" . "<br>";
    }
}

class ToasterPremium extends Toaster {
    protected int $slots;
    private int $duration = 1;

    public function __construct(int $newDuration) {
        parent::__construct(4);
        $this->duration = $newDuration;
    }

    public function toast() {
        parent::toast();
        echo "Toasting {$this->slots} bread for {$this->duration} minutes" . "<br>";
    }
}

$myToaster = new ToasterPremium(3);
$myToaster->toast();