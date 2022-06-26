<?php

class vehicle
{
    // Method
    public function accelerate()
    {
        echo "It runs!";
    }

    // Properties
    public $color;
    protected $weight = 2000;
    // private $weight = 2000;

    public function currentWeight() {
        {
            echo $this->weight;
        }
    }
}

$testVehicle = new vehicle;

$testVehicle -> color = "blue";

// Note: Weight cannot be accessed as public or protected.
// echo $testVehicle -> weight;

// Note: Vehicle Object
// echo $testVehicle -> currentWeight();

// $testVehicle -> accelerate();

// print "<pre>";
// print_r($testVehicle);
// print "</pre>";

echo "Vehicle: ";