<?php

include 'vehicle.php';

class truck extends vehicle
{
    public function truckWeight() {
        $this -> weight = 2500;
        echo $this -> weight;
    }
}

$testTruck = new truck;

// Note: Property undefined if weight is private, cannot be changed if protected.
// $weight = 2500;

$testTruck -> truckWeight();