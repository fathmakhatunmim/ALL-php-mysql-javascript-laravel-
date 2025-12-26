<?php
// Indexed Array

// 👉 যেখানে index number (0,1,2...) দিয়ে value থাকে

$color = ["red","green","blue"];
 echo $color[0];
 echo $color[1];

//Associative Array

//যেখানে key => value আকারে data থাকে


$student = [
    "name" => "fathma mim",
    "dept"=> "CSE",
    "cgpa" => 3.83
];

echo $student["name"]; 

// Multidimensional Array
// Array-এর ভিতরে আরেকটা array

$student = [
     ["fathma","cse",3.83],
     ["nova", "eee",3.70],
     ["bilkis","BBA",3.60]

];

echo $student[0][0];
echo $student[1][1];

?>