<?php
//if and else
$a = intval(fgets(STDIN));
if($a % 2 == 0){
    echo "even";
}
else {
    echo "odd";
}




//switch case

$day = intval(fgets(STDIN));

switch ($day)
    {
          case 1:
            echo "saturday";
            break;
          case 2:
            echo "sunday";
            break;
          case 3:
            echo "monday";
            break;
          case 4:
            echo "Tuesday";
            break;
          case 5:
            echo "wednesday";
            break;
          case 6:
            echo "Thursday";
            break;
          default:
            echo "saturday";
            


    }
















?>