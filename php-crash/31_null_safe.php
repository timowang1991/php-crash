<?php
    class Account {    
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

    $myAccount = null;

    if (isset($myAccount)) {
        var_dump($myAccount->newBalance);
    }
    echo $myAccount->newBalance . '<br>';
    echo $myAccount?->newBalance . '<br>';
    
    $myAccount = new Account('John Doe', 1000);
    echo $myAccount->newBalance . '<br>';
    echo $myAccount?->newBalance . '<br>';

?>