<!-- Employee Salary (Inheritance)
Problem Statement

Create a base class Employee with basicSalary.
Derived class Manager adds bonus.
Total salary = basicSalary + bonus.

Input

basicSalary bonus

Output

Print total salary -->


<?php

class employee{
    public $basicSalary;
     

    public  function __construct($basicSalary){
          
         $this->basicSalary = $basicSalary;

    }

}

class manager extends employee{
     public $bonus;

    public function __construct($basicSalary,$bonus){
        parent::__construct($basicSalary);
        $this->bonus = $bonus;

    }

    public function salary(){
        return $this->basicSalary + $this->bonus;
    }
   
}


//read input

$input = explode(" ",trim(fgets(STDIN)));
$basicSalary = intval($input[0]);
$bonus = intval($input[1]);


$manager = new Manager($basicSalary,$bonus);
echo $manager->salary()."\n";
 


?>