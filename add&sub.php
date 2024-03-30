<?php
$a=123;
$rev=0;
while($num>=1)
{
    $reminder=$num%10;
    $reverse=($reverse*10)+$reminder;
    $num=($num/10);
}
echo "reverse number 321 is ".$reverse;
?>