<!-- String Manipulation মানে কী?

 String (text) কে change / check / modify করা -->
<?php
//  <!-- strlen() – string length -->

$text = "Hello PHP";
echo strlen($text);
echo "<br>";
echo strtolower("HELLO");
echo "<br>";
echo strtoupper("hello");
echo "<br>";
echo ucfirst("php");
echo "<br>";
echo ucwords("php laravel developer");
echo "<br>";
$text = "  hello  ";
echo trim($text);
echo "<br>";
// str_replace() – text replace
echo str_replace("PHP", "Laravel", "I love PHP");
echo "<br>";
// strpos() – position find
echo strpos("I love PHP", "PHP");
echo "<br>";
// substr() – part of string
echo substr("Hello World", 0, 5);
echo "<br>";
// strcmp() – compare strings
echo strcmp("php", "php");
echo "<br>";


?>