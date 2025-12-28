<?php

class student{

  public $student;
  public $gradeA;
  public $gradeB;
  public $gradeC;

  public function __construct($student,$gradeA,$gradeB,$gradeC){
         $this->student = $student;
         $this->gradeA=$gradeA;
         $this->gradeB=$gradeB;
         $this->gradeC=$gradeC;       
  }

  public function avg(){
    return ($this->gradeA*2+$this->gradeB*3+$this->gradeC*5)/10;
  }

}

$n = Intval(trim(fgets(STDIN)));
$count = 0;
$macAvg = -1;
$topStudent = 
'';

for($i=0; $i<$n; $i++){
    $input = explode(" ",trim(fgets(STDIN)));

    $student = new student($input[0],
    floatval($input[1]),
    floatval($input[2]),
    floatval($input[3]));



$average=$student->avg();

if($average >= 7.0){
    $count++;
}

if($average > $macAvg){

    $macAvg = $average;
    $topStudent = $student->student;

}
 
}

echo $count . PHP_EOL;
echo $topStudent . PHP_EOL;







?>