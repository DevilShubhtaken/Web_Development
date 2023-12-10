<?php
    $date = new DateTime('now', new DateTimeZone('Asia/kolkata'));
    $dat = $date->format('H');
    if($dat < 12) 
            echo "Good morning to everyone"; 
    else if($dat < 17) 
            echo "Good afternoon to everyone";
    else if($dat<20)
            echo "Good evening to everyone"; 
    else 
            echo "Good night to everyone";

?>
