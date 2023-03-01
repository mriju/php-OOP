<?php
// inheritance
class Car{
    // properties
    public $name;
    public $color;

    // contractor function
    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    // method - getter and setter
    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }

    function set_color($color){
        $this->color = $color;
    }

    function get_color(){
        return $this->color;
    }
}

class Toyota extends Car{
    public $secret_engine;

    function set_engine($engine){
        $this->secret_engine = $engine;
    }

    function get_full_specification($name, $color){
        echo "This is $name car which is $color and its engine number# $this->secret_engine";
    }
}

$myCar = new Toyota('Toyota', 'White');
$myCar->set_engine("TY89526ge45r");
echo "<br>";
$myCar->set_name('BMW');
$myCar->set_color('Red');
$myCar->get_full_specification($myCar->get_name(), $myCar->get_color());