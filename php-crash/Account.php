<?php

declare(strict_types=1);

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

?>