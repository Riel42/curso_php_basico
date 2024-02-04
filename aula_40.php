<?php 

#Closures --> is a anonymous function that use global variables

$x = 20;
$y = 30;

$myClousure = function($z) use($x, $y){
    echo "$z, $x and $y";
    $y += 100;
    echo "<br>$y";
};

$myClousure(5);

echo "<hr>$y<br>"; //out the function, the value of variable is not changed

# ARROW FUNCTIONS #

//Arrow functions is a clousure function, but simplified

$a = 20;
$b = 30;

$arrowFunction = fn($c) => "$a, $b and $c";

echo "<hr>" . $arrowFunction(10);

//fn == function

//RESUME

echo "<hr>";

$clousure = function($value_that_i_will_pass) use($parameter_01, $parameter_02){ 
    $parameter_01 = 1;
    $parameter_02 = 2;
    echo "$value_that_i_will_pass, $parameter_01 and $parameter_02";
};

$clousure(3);

echo "<hr>";

$globalVar = 10;

$arrow = fn($value_that_i_will_pass) => 
    "$globalVar * $value_that_i_will_pass = " . $globalVar*$value_that_i_will_pass;
echo $arrow(20);

// this arrow is like: i wanna pass this parameters to this anonymous function

//in php, arrow functions only return a value (=> is like "return this")
?>