<?php
// static

use MyClass as GlobalMyClass;

class MyClass{
    public static $my_static_property = "Static property value";

    public static function my_static_method(){
        echo "Static Method Called";
    }
}

echo MyClass::$my_static_property;
echo "<br>";
MyClass::my_static_method();