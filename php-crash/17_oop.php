<?php

class User {
    // Properties are attributes that belong to a class
    // Public, private, protected
    public $name;
    public $email;
    public $password;

    public function __construct($name, $email, $password) { // magic methods
        // echo 'constructor', '<br/>';
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

// Instantiate a user object
$user1 = new User('Brad', 'brad@gmail.com', '12345');
$user2 = new User('John', 'john@gmail.com', '23456');
$user1->set_name("Brad");
$user2->set_name("John");

// var_dump($user1);
echo $user1->get_name();
echo '<br>';
echo $user2->get_name();

echo $user1->email;
echo $user2->email;

class Employee extends User {
    public function __construct($name, $email, $password, $title) {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', '12345', 'Manager');
echo $employee1->get_title();
?>