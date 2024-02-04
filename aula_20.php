<?php 
        $name = "Gabryel Miranda dos Reis";
        $aka = "Bebel";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise #20</title>
</head>
<body>
    <h3>My name is:</h3>
    <h1>
    <?= $name . "<br>A.K.A " . $aka ?>
    </h1>
    <p><?= "My name has " . mb_strlen($name) . " characters" ?></p>

    <p><?= strtolower($name) ?></p>

    <p><?= "My name is " . mb_strtoupper($name) . ", aka " . mb_strtoupper($aka) ?></p>

    <p><?= "My fist name: " . substr($name, 0, 7) . "<br>My last name: " . substr($name, 8, mb_strlen($name)) ?></p>

</body>
</html>