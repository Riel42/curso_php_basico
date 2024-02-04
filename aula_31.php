<?php 

# GO TO, CONTINUE AND BREAK #

$names = ['jeff', 'max', 'wilter white'];
foreach($names as $name){
    if($name == 'max'){
        continue; #It's return to loop and ignore the echo (and doesn't show the 'max' name)
    }
    echo "$name<br>";
}

echo '<hr>';

$names = ['jeff', 'max', 'wilter white'];
foreach($names as $name){
    if($name == 'wilter white'){
        break; #It's break the loop
    }
    echo "$name<br>";
}

echo "<hr>";

for($i = 0; $i < 20; $i++){
    if($i = 10){
        goto label; #It's go to a label called 'label'
    }
}

label:
    echo "Its go to here!";

echo "<hr>";

# FUNCTIONS #

function CodesBlock(){ 
    #Functions isn't case sensitive, so, CodesBlock is equal to CoDeSbLoCk
    echo "This";
    echo " is";
    echo " a";
    echo " function";
}

CodesBlock();

# PARAMETERS #

function parameters($a, $b){
    echo "<hr>$a + $b = " . ($a+$b);
}

parameters(42, 27);

$names = ['Bebel', 'Guxtavo', 'Terry Crews'];

function allNames($array){
    foreach($array as $stuff){
        echo "My name's $stuff!<br>";
    }
}

echo '<hr>';
allNames($names);
echo '<hr>';

?>