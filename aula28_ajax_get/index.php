<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.4.1.min.js"></script>
    <title>ajax_get</title>
</head>

<body>
   <h1>Cadastrar</h1>
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br>
        <label for="sobrenome">Sobrenome:</label><br>
        <input type="text" id="sobrenome" name="sobrenome"><br><br>
        <input id="btnCadastrar" type="submit" value="Submit">
        <span id="spResultado"></span>

<hr>
<h1>Consultar</h1>
<input id="btnConsultar" type="submit" value="Consultar">
<div id="bqResultado">

</div>

</body>
<script src="js/script.js"></script>

</html>