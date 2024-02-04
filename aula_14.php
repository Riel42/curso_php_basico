<?php 

$a = 20;
print $a++."<br>";
print $a;

/*****************************/

$a = 100;
$b = 250;
$c = $a + $b;
++$c;
print '<br>' . $c;


//ou 

print '<br>' . $c = $a = 100 + $b = 250 + 1;

$x = (2 === 3);     #false
$x = (5 >= 3);       #true
$x = (6 <= 9);       #true
$x = (5 !== '5');   #true (type's different)
$x = (1 <> 2);       #true
?>