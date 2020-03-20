<?php
//primeiro valor atribui;
//segundo condição de saída;
//no final de cada iteração este parâmetro é executado;



for ($i = 0; $i < 10; $i++){
    echo $i."<br>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for</title>
</head>

<body>
    <ul>
        <?php
        for($i = 0; $i <= 10; $i++){
            ?>
        <li>4 * <?= $i ?> = <?= (4 * $i) ?></li>
        <?php
        }
     ?>
    </ul>
    <hr>
    <ul>
        <?php
        for($i = 1; $i <= 10; $i++){
            for($j = 0; $j <= 10; $j++){
            ?>
        <li><?= $i ?> * <?= $j ?> = <?= ($i * $j) ?></li>
        <?php
            }
            echo "<br>";
        }
     ?>
    </ul>

</body>

</html>