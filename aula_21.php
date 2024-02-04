<?php 

$array = [1, 2, 3, 'Bebel'];

echo $array[0] . '<br>';

echo $array[3] . '<br>';

# I can create my own index of array

$my_own_index = [
    10 => 42,
    20 => 69,
    30 => 666,
    40 => 'V',
];

echo "<br>" . $my_own_index[10] . "<br>"; //returns 42

$my_own_index[] = "Add the last key in my array";

echo "<br>" . $my_own_index[41] . "<br>";

array_push($my_own_index, "This function the last key in my array");

echo "<br>" . $my_own_index[42] . "<br>";

$database = [
    'name' => 'John',
    'email' => 'johnassjoblol@hotmail.com',
] ;

echo "<br>" . $database['email'] . "<br>";

$numbers = [
    [1, 2, 3, 6],
    [10, 20, 30, 50],
    [69, 42, 5]
];

echo "<br>" . $numbers[2][0] . "<br>"; #69 

$cities = [
    'Brazil' => ['Penedo', 'Guapé', 'São Paulo'],
    'Portugal' => ['Lisboa', 'Porto', 'Coimbra'],
];

echo "<br>" . $cities['Brazil'][1] . "<br>"; #Guapé
?>