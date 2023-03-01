<?php
// Task 2: Basic OOP in PHP
// Create a PHP class called "Person" with the following properties and methods:
// Properties:
// Name
// Email
// Methods:
// setName($name): sets the name property
// setEmail($email): sets the email property
// getName(): returns the name property
// getEmail(): returns the email property
// Create an instance of the Person class and set the name and email properties. Use the getName() and getEmail() methods to display the properties on the webpage.

class Person {
    public $name;
    public $email;

    public function setName($name){
        $this->name = $name;
    }
    public function setEmail($email){
        $this->email = $email;
    }

    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
}

$obj = new Person();
$obj -> setName('Riju');
$obj -> setEmail('riju1230@gmail.com');

echo 'My Name is: '. $obj->getName();
echo "<br>";
echo 'My Email Address is: '. $obj->getEmail();