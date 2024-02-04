<?php 

$var; //You define variables with '$' (dollar symbol)
          //It's not typed.
$var = 69;

$snake_case = "it's not camel case";

$camelCase = "it's not snake case";

$int = 10;
$float = 10.10;
$bool = false;
$string = "Hello fella";
$array = [69, 42, 161];
$null = null;

echo "I love " . $var . " <3<br>";	

$x = 1 + 1 - 1 * 1 / 1;
$m = 4 % 3;
$result = $x * $m * 10.5 ** 2;

echo $result . '<br>';

$result -= 42.25;

echo $result . '<br>';

$result++;

echo $result . '<br>'; //The ++ increment here

++$result; //The ++ increment here, and no in the next command

echo $result . '<br>';
?>