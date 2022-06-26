<?php

class vehicle
{
    // Method
    public function accelerate()
    {
        echo "It runs!";
    }
}

$testVehicle = new vehicle;
$testVehicle -> accelerate();