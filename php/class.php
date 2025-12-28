<!-- Problem 1: Student Average (Class & Object)
Problem Statement

Create a class Student with attributes name and marks.
Given marks of N students, calculate and print each student’s average mark.

Input

First line: integer N

Next N lines: name m1 m2 m3

Output

For each student print:
name average

Constraints

1 ≤ N ≤ 100

0 ≤ marks ≤ 100 -->

<?php

class  student{
         public $name;
         public $m1;
         public $m2;
         public $m3;


         public function average(){
            return($this->m1 +$this->m2+$this->m3)/3;

         }

}
 $n = intval(trim(fgets(STDIN)));

 for($i=0 ; $i<$n; $i++){
    $input = explode(" ",trim(fgets(STDIN)));


    $student = new student();
    $student->name = $input[0];
    $student->m1=intval($input[1]);
    $student->m2=intval($input[2]);
    $student->m3=intval($input[3]);

    printf("%s %.2f\n",$student->name,$student->average());

 }





?>