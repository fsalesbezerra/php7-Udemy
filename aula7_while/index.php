<?php

$cont = 0;
while($cont < 10){
    echo "Cont: {$cont}<br>";
    $cont++; // condição de saída
}

$cont = 10;
while($cont > 0){
    echo "Cont: {$cont}<br>";
    $cont--; //operadores unários
}

$cont = 0;
while($cont < 10){
    echo "Cont: {$cont}<br>";
    // $cont = $cont + 1;
    // $cont += 1;
    $cont++;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>

<body>
    <ul>
        <?php
            $cont = 0;
            while($cont <= 10){
                // if($cont > 5){
                ?>
                <li>Cont: <?= $cont; ?></li>  
                <?php
                // }
                $cont++; 
            }
        ?>
    </ul>
</body>

</html>