<?php
class Car{
    private $name;
    private $model;
    private $year;

    public function __construct($name, $model, $year)
    {
        $this->name = $name;
        $this->model = $model;
        $this->year = $year;
    }

    public function set_name($name){
        $this->name = $name;
    }

    public function get_name(){
       return $this->name;
    }
    public function set_model($model){
        $this->model = $model;
    }

    public function get_model(){
       return $this->model;
    }
    public function set_year($year){
        $this->year = $year;
    }

    public function get_year(){
       return $this->year;
    }

    public function display_info(){
        echo "Car Name:". $this->get_name() . '<br>';
        echo "Car Model:". $this->get_model() . '<br>';
        echo "Year:". $this->get_year() . '<br>';
    }
}


$obj = new Car('Toyota', 'TB2023', 2023);
$obj->display_info();
echo '------------------';
echo '<br>';
$obj1 = new Car('BMW', 'BM2015', 2015);
$obj1->display_info();