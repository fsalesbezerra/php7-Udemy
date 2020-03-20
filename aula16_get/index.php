<?php

// $nome = $_GET['nome'];
// $email = $_GET['email'];
// echo $nome;
// echo "<br>";
// echo $email;
$arrayNome = ["Fernando", "Thales", "Lobo", "Rafael"];

$nome = filter_input(INPUT_GET, "txtNome", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_GET, "txEmail", FILTER_SANITIZE_STRING);
$funcionarioCod = filter_input(INPUT_GET, "slFuncionarios", FILTER_SANITIZE_NUMBER_INT);
$funcionario = "";



if(isset($funcionarioCod)){
    $funcionario = $arrayNome[($funcionarioCod -1)];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get</title>
</head>

<body>
    <form action="" method="get">
        <ul>
            <li>Nome: <input type="text" name="txtNome"></li>
            <li>E-mail: <input type="text" name="txEmail"></li>
            <li>Funcionário:
                <select name="slFuncionarios" id="">
                    <?php
                    for($i = 0; $i < count($arrayNome); $i++){
                        ?>
                    <option value="<?= ($i + 1); ?>"><?= $arrayNome[$i]; ?></option>
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