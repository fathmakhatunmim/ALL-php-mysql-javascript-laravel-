<!-- Common Functions (Exam Important)

fopen() → file open

fwrite() → file-এ লেখা

fread() → file থেকে পড়া

fgets() → এক লাইন পড়া

fclose() → file বন্ধ

file_exists() → file আছে কিনা check -->

<?php
$file = fopen("data.txt", "w"); // write mode

fwrite($file, "Hello PHP File Handling\n");
fwrite($file, "This is second line");

fclose($file);

echo "File written successfully";
?>

