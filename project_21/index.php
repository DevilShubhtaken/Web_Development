<?php
function displayStringOperations($inputString) {
    
    $length = strlen($inputString);
    echo "String Length: $length <br>";

    $reversedString = strrev($inputString);
    echo "Reversed String: $reversedString <br>";

    $uppercaseString = strtoupper($inputString);
    echo "Uppercase String: $uppercaseString <br>";

    $lowercaseString = strtolower($inputString);
    echo "Lowercase String: $lowercaseString <br>";
}

$input = "Hello, World!";
displayStringOperations($input);
?>
