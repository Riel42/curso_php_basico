<?php 

$var = 10;

function cantUseALocalVar(){
    //echo $var; # error! 
}

$a = 20;

function globalVar(){

    global $a;
    return $a = 30;
}

echo globalVar();
echo "<br>$a<br><hr>";


$superGlobal = 100;

function superGlobal(){
    $GLOBALS['superGlobal'] = 200;
}

superGlobal();
echo "<br>$superGlobal<br><hr>";

# ANONYMOUS FUNCTIONS #

$c = function($text){
    echo "<br>This variable is a function!<br>";
    echo "$text<br>";
};

$c('It\'s a test!');

$anonymous = function(){
    return '<br>A simple text<br>';
};

function text($parameter){
    echo $parameter;
}

text($anonymous());
?>