<?php 

# WHILE

$while_var = 1;

while($while_var <= 69){
    if($while_var == 69){
        echo "The best number of the world: $while_var";
        break;
    }
    else{
        echo $while_var++ . " - ";
    }
}

echo '<hr>';

# DO WHILE

$do_while_var = 1;

do{
    echo $do_while_var . '<br>';
} while($do_while_var != 1);

echo '<hr>';

do echo $do_while_var . '<br>';  while($do_while_var != 1);

echo '<hr>';

# FOR

for($x = 10; $x >= 1; $x--){
    echo $x . '<br>';
}

echo '<hr>';

for($count = 1, $x = 10; $count <= 10; $count++, $x--){
    echo $x . '<br>';
}

echo '<hr>';

$names = ['John', 'Thomas', 'Wilter White'];

for($i = 0; $i < count($names); $i++){
    echo $names[$i] . '<br>';
}
?>