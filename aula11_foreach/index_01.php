<?php 
// $arrFrutas = ["Uva", "Banana", "Melão", "Acabate"];

$arrFrutas = [
    1 => "Uva", 
    2 => "Banana", 
    3 => "Melão", 
    4 => "Acabate"
];

foreach($arrFrutas as $key => $frutas){
    echo "Key: {$key} => Value: {$frutas}"."<br>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
</head>

<body>
    <hr>
    <ul>
        <?php
        foreach($arrFrutas as $f){
            ?>
        <li><?= $f;?></li>
        <?php
        }
        ?>
    </ul>
</body>

</html>