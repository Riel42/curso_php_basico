<?php 

# IF, ELSE IF AND ELSE #

$name = 'Bebel';
$yo = 18;

if(!($name == 'Bebel')){
    echo "It's correct! :)";
}
else{
    echo "It's doesn't work :(";
}

if((!(true) && (true)) || true){
    echo "<br>True<br>";
}
if($yo <= 0){
    echo "You don't exist 'o'";
}
else{
    if($yo == 18){
        echo "You are 18!";
    }
    else if($yo < 18){
        echo "You are under 18";
    }
    else{
        echo "You are so old :p";
    }   
}

$name = 'Guxtavo';

# SWITCH CASE #

switch($name){
    case 'Bebel':
        echo "<br>The name is equal to 'Bebel'!<br>";
    break;
    case 'Guxtavo':
        echo "<br>My beloved <3<br>";
    break;
    default:
        echo "<br>Your name's $name<br>";
    break;
}

# ALTERNATIVE IF AND ELSE #

if(10 > 11):
    echo "Damn, what?";
elseif (10 == 10):
    echo "It's work";
else:
    echo "It's doesn't work lol";
endif;

# ELVIS OPERATOR (WITH ECHO) #

echo "<br>" . $it_is_elvis_presley = $name == 'Elvis Presley' ? 'Yeah!' : 'Nope' . "<br>";
# it's print "Nope" 'cause the var $name is equal to 'Guxtavo'

$option = 1;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial #23 - #26</title>
</head>
<body>
    <h2 style="color: <?= $option == 1 ? 'red' : 'orange'?>">This text is red <?="\u{262D}"?></h2>
</body>
</html>

<?php 

# ALTERNATIVE TO SWITCH: MATCH #

$x = 10;

echo match($x){
    5, 10, 15   => "It's equal to 5 or 10 or 15!",
    20          => "It's equal to 20",
    default     => "It's doesn't equal to 5, 10 and 15!"
};

?>