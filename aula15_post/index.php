<?php

$arrayNome = ["Fernando", "Thales", "Lobo", "Rafael"];


$nome = filter_input(INPUT_POST, "txtNome", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "txEmail", FILTER_SANITIZE_STRING);
$funcionarioCod = filter_input(INPUT_POST, "slFuncionarios", FILTER_SANITIZE_NUMBER_INT);
$funcionario = "";

// echo $funcionarioCod;

if(isset($funcionarioCod)){
    $funcionario = $arrayNome[$funcionarioCod];
}


// if(isset($_POST['txtNome'])){
//     $nome = $_POST["txtNome"];
// }

// if(isset($_POST['txEmail'])){
//     $email = $_POST["txEmail"];
// }

// if(isset($_POST['slFuncionario'])){
//     $funcionario = $arrayNome[$_POST["slFuncionario"]];
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>

<body>
    <form action="" method="post">
        <ul>
            <li>Nome: <input type="text" name="txtNome"></li>
            <li>E-mail: <input type="text" name="txEmail"></li>
            <li>Funcionário:
                <select name="slFuncionarios" id="">
                    <?php
                    for($i = 0; $i < count($arrayNome); $i++){
                        ?>
                    <option value="<?= $i; ?>"><?= $arrayNome[$i]; ?></option>
                    <?php
                        }
                ?>
                </select>
            </li>
            <li><input type="submit" name="btnSubmit" value="Cadastrar" /></li>
        </ul>
    </form>
    <br>
    <hr>
    <p>Nome: <?= $nome; ?></p>
    <p>E-mail: <?= $email; ?></p>
    <p>Funcionário: <?= $funcionario; ?></p>
</body>

</html>