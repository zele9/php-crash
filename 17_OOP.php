<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a 
  procedural or object oriented way. OOP consists 
  of classes that can hold "properties" and "methods".
  Objects can be created from classes.
*/
class User {
    //properties are attributes belonging to a class
     // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the 
    //class and by inheriting classes
    public $name;
    public $email;
    public $password;

    //A constructor is a method that runs when an object is created
    public function __construct($namec, $emailc, $passwordc) {
        $this -> name = $namec;
        $this -> email = $emailc;
        $this -> password = $passwordc;
        //echo 'Constructor ran';
    }

    //method is a function that belongs to a class
    function set_name($name1) {
        $this -> name = $name1;
    }
    function get_name() {
        return $this->name;
    }
}
//Instantiate a user object
$user1 = new User('Ataba', 'zetebsjr@gmail.com', '654321');
$user2 = new User('Karen', 'atabakaren@gmail.com', '123456');

echo $user1 -> email;
echo "<br>";
echo $user2 -> name;

// $user1 -> set_name('Zele');
// $user2 -> set_name('Chopstix');

// var_dump($user1);
// echo '<br>';
// var_dump($user2);
// // $user1 -> name = 'Ataba';
// // echo $user1 -> name;
// echo '<br>';
// echo $user1 -> get_name();
// echo '<br>';
// echo $user2 -> get_name();

//Inheritance is done using the extends key word
class Employee extends User {
    public $titlee;
    public function __construct($namee, $emaile, $passworde, $title) {
        //we do not need to set all the variables like in the parents constructor
        //instead we do as below
        parent::__construct($namee, $emaile, $passworde);
        $this->titlee = $title;
    }
    public function get_title() {
        return $this -> titlee;
    }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', '7890', 'Manager');

echo $employee1 -> get_title();