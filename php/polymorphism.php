<!-- Shape Area Calculator (Polymorphism)
Problem Statement

Create a base class Shape with method area().
Derived classes:

Rectangle (length, width)

Circle (radius)

Calculate and print the area based on shape type.

Input

First line: integer T (number of test cases)

For each test case:

R l w → rectangle

C r → circle

Output

Print area rounded to 2 decimal places -->



<?php
abstract class shape{
   abstract public function area();
  
}

class Rectangle extends shape {
    private $length;
    private $width;

    public function __construct($length,$width){
        $this->length = $length;
        $this->width = $width;
    }

    public function area(){
         return $this->length * $this->width;
    }


}


class circle extends shape{
    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }


    public function area(){
        return 3.1416 * ($this->radius * $this->radius);

    }
}


$t = intval(trim(fgets(STDIN)));
for($i=0;$i<$t;$i++){

    $input = explode(" ",trim(fgets(STDIN)));


    if(strtoupper($input[0])=='R'){
        $length = floatval($input[1]);
        $width = floatval($input[2]);
        $shape = new Rectangle($length,$width);
    }
    elseif(strtoupper($input[0])=='C'){
        $radius = floatval($input[1]);
        $shape = new circle($radius);
    }else{

        continue;
    }

    printf("%.2f\n",$shape->area());
}



?>