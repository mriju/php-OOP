<?php
// access modifier
class MyClass{
    public $public_property;
    protected $protected_property;
    private $private_property;

    public function public_method(){
        echo "This is a public method";
    }

    protected function protected_method(){
        echo "This is a protected method";
    }

    private function private_method(){
        echo "This is private method";
    }
}

$obj = new MyClass();
echo $obj->public_property = "Public Value";
echo "<br>";
// $obj->protected_property = "Protected Value";  Not accessible outside of class
// $obj->protected_property = "Protected Value"; Not accessible outside of class
$obj->public_method();
// $obj->protected_method(); Not accessible outside of class
// $obj->public_method(); Not accessible outside of class