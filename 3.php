<?php
// constructor

use Person as GlobalPerson;

class Person{
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce(){
        echo "Hello, My name is ". $this->name. " and I am ".$this->age . " years old.";
    }

}

$person1 = new Person('John', 23);
$person1->introduce();

echo '<br>';

$person2 = new Person('Sarah', 18);
$person2->introduce();