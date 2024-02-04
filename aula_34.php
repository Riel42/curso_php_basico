<?php 

# LESSON 34 #

function value($a, $b = 2){
    echo "<br>$a * $b = " . $a*$b . '<br>';
}

value(10); //$a = 10; $b = 2
value(10, 20); //$a = 10; $b = 20 ()
?>

<?php 

# NAMED ARGUMENTS #

function namedArguments($a, $b = 10, $c = 30){
    echo "<hr>$a + $b + $c = " . $a + $b + $c . '<br>'; 
}

namedArguments(10, c: 100); 
//Here, the parameter c is equal to 100, the b has your default value and the a is equal to 10

function otherFunction($a){
    $x = func_get_arg(0); //It's a index, so, I can put 3 values calling the function using an 'array'
    $y = func_get_arg(1);
    $z = func_get_arg(2);

    echo "<hr>$x, $y and $z!<br>";

    echo "\$a is equal to $a because \$a is equal to first parameter!<br>";
}

otherFunction(10, 20, 30);

function variadicParameter(...$arguments){ 
    //...$arguments receive several values that I put when I call the function
    
    foreach($arguments as $v){
        echo "$v ";
    }
}

variadicParameter('Bebel', 'ass', 'job', 69);

function ignore(){
    return;
    echo "This text was ignored 'cause I returned the function without anything";
}

echo "<hr>";

function expression($a, $b){
    return $a + $b;
}

echo expression(1,2); //It needs a echo!

function theCorrectName($n){
    if($n === 'John'){
        return true;
    }
    else{
        return false;
    }
}

if(theCorrectName('John')){
    echo "<hr>The correct name!<br>";
}
else{
    echo "<hr>The false name :(<br>";
}

?>