<?php
$vCount=0;
$cCount=0;

$a="hello world";
$a=strtolower($a);
$b=strlen($a);
for($i=0; $i < $b;$i++)
    {
        if($a[$i]=='a'||$a[$i]=='e'||$a[$i]=='i'||$a[$i]=='o'||$a[$i]=='u'){
            $vCount++;
        }
        else if($a[$i]>='a' && $a[$i]<='z'){
            $cCount++;
        }
    
    }

echo "Number of vowels:".$vCount ."\n";
echo "Number of Consonents:".$cCount;
?>
