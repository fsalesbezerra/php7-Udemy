<?php

// function Ola($nome, $email = ""){
//     return "Olá meu nome é: {$nome} e meu e-mail é {$email}!";
// }

// $v = Ola("Fernando");
// echo $v;



function Ajuste($p1, $p2){
    return (($p1 * $p2) / 4);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>

<body>
    <p><?= Ajuste(3, 10); ?></p>
    <hr>
    <ul>
        <?php
        for($i = 0; $i <= 10; $i++){
            ?>
        <li><?= Ajuste($i, ($i + 6)); ?></li>
        <?php
        }
        ?>
    </ul>

</body>

</html>