<?php

// Interface definition
// Example 1

interface Cars {
    public function intro();
}

// Class definitions
class BMW implements Cars{
    public $secret_engine;

    public function __construct($engine)
    {
        $this->secret_engine = $engine;
    }

    public function intro()
    {
        echo "This is BMW car with engine: $this->secret_engine";   
    }
}

class Toyota implements Cars{
    public $secret_engine;

    public function __construct($engine)
    {
        $this->secret_engine = $engine;
    }

    public function intro()
    {
        echo "This is Toyota car with engine: $this->secret_engine";   
    }
}


//Create Objects
$bmw = new BMW("BM7345iu&6");
$toyota = new Toyota("TY89345au&6");

print_r($bmw);
echo PHP_EOL;
print_r($toyota);
echo PHP_EOL;


$bmw->intro();
echo PHP_EOL;
$toyota->intro();