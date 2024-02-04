<?php 

$nomes = ['Bebel', 'Guxtavo', 'Wilter White'];

foreach($nomes as $nome){ 
//Cada valor de um índice de $nomes será passado para $nome conforme o loop
    echo "$nome<br>";
}

$capitais = [
    'Portugal'  =>  'Lisboa',
    'Brazil'    =>  'Brasília',
    'Espanha'   =>  'Madrid'
];

echo '<hr>';

foreach($capitais as $chave => $valor){ 
    // $chave busca as chaves de $capitais. $valor pega os valores de cada chave.
    echo "A capital de $chave é $valor<br>";
}

echo '<hr>';


$array = [
    'names'     =>  ['Bebel', 'Guxtavo', 'Wilter White'],
    'numbers'   =>  [666, 69, 42],
    'words'     =>  ['fish', 'ball', 'cat']
];

foreach($array as $key => $values){
    for($i = 0; $i<3; $i++){
        echo "$values[$i]<br>";
    }
}

echo '<hr>';

for($i = 0; $i < 3; $i++){
    foreach($array as $key => $values){
        echo "$values[$i] - ";
    }
    echo "<br>";
}
?>