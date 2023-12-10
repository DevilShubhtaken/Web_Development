<?php
function Palindrome($a){
    if (strrev($a) == $a){
        return 1;
    }
    else{
        return 0;
    }
}

$a = "hello";
if (Palindrome($a)){
    echo "Palindrome";
}
else{
    echo"Not a Palindrome";
}
?>
