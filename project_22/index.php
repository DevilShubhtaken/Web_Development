<?php
function swapByValue($a, $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "Swapped values (Call by Value): a = $a, b = $b <br>";
}

$num1 = 10;
$num2 = 20;
echo "Before swapping: num1 = $num1, num2 = $num2 <br>";
swapByValue($num1, $num2);
echo "After swapping (Call by Value): num1 = $num1, num2 = $num2 <br>";

function swapByReference(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "Swapped values (Call by Reference): a = $a, b = $b <br>";
}

$num3 = 30;
$num4 = 40;
echo "Before swapping: num3 = $num3, num4 = $num4 <br>";
swapByReference($num3, $num4);
echo "After swapping (Call by Reference): num3 = $num3, num4 = $num4 <br>";

?>
