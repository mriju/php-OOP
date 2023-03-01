<?php
// define class
class Car{
    // define properties
    public $make;
    public $model;
    public $year;

    // define methods
    public function start(){
        echo "The Car is Starting";
    }

    public function stop(){
        echo "The Car is Stopping";
    }
}

// create instance of the object
$myCar = new Car();

// set properties of car object
$myCar->make = "Honda";
$myCar->model = "Civic";
$myCar->year = 2019;

// call the start method of the car object
$myCar->start();

echo '<br>';
// call the stop method of the car object
$myCar->stop();