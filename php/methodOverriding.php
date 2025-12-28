<!-- Vehicle Speed (Method Overriding)
Problem Statement

Create class Vehicle with method maxSpeed().
Derived classes:

Car → returns 120

Bike → returns 80

Print max speed based on vehicle type.

Input

A single string: Car or Bike

Output

Print max speed -->

<?php
class vehicle{
    public function maxSpeed(){
        return 0;
    }
}


class car extends vehicle{
     public function maxSpeed(){
        return 120;
     }

}


class Bike extends vehicle{
    public function maxSpeed(){
        return 80;
    }
}

$type = trim(fgets(STDIN));

if(strtolower($type)=='car'){
    $vehicle = new car();
}
elseif(strtolower($type)=='bike'){
    $vehicle = new Bike();
}
else{
    exit;
}

echo $vehicle->maxSpeed()."\n";




?>