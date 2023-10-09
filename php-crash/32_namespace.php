<?php
// better practice to put this file in a separate folder named App (same as namespace)

declare(strict_types=1);

// namespace App\Bank; // use backslash to do multi layer namespaces
namespace App;

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

class SocialMedia {
    public function __construct(
        public string $name,
    ) {}
}

// new DateTime(); // error: we are now in App namespace
// new \DateTime(); // this will work because we are using backslash to specify global namespace
use DateTime;
new DateTime(); // this will work

use DateTime as DT; // as alias
new DT();
?>