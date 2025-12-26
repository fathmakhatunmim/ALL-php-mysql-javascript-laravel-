<?php
try {
    $a = 10;
    if ($a < 0) {
        throw new Exception("Number must be positive");
    }
    echo "Number is: $a";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>