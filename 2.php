<?php
// class and object
class Person{
    public $name;
    public $age;

    public function sayHello()
    {
        echo "Hello, my name is ". $this->name. " and I am ". $this->age. " old.";
    }
}

$person = new Person();
$person->name = "Johan";
$person->age = 30;

$person->sayHello();
