<?php

$idade = 16;
$senha = "123";
$acesso = false;
//maior
if($idade > 18){
    echo "você é de maior!"."<br>";
}else {
    echo "você é de menor!"."<br>";
}

//menor
if($idade < 18){
    echo "Okay"."<br>";
}else {
    echo "Não tem permissão"."<br>";
}


//senha
if($senha === "123"){
    echo "Acesso autorizado!"."<br>";
}else{
    echo "Acesso não autorizado!"."<br>";

}
//senha com elseif - Identico
if($senha === "123"){
    echo "Acesso autorizado!"."<br>";
}else if($senha === "1234"){
    echo "Acesso autorizado!"."<br>";

}else{
    echo "Acesso não autorizado!"."<br>";

}

if(($idade >= 18) && ($senha == "123")){
    echo "você é de maior!"."<br>";
}else {
    echo "você é de menor!"."<br>";
}
//idade ou senha igual
if(($idade >= 18) || ($senha == "123")){
    echo "Autorizado"."<br>";
}else {
    echo "Não Autorizado"."<br>";
}
//idade ou senha diferente !=
if(($idade >= 18) || ($senha != "123")){
    echo "Autorizado"."<br>";
}else {
    echo "Não Autorizado"."<br>";
}

//boolean
if(!$acesso){
    echo "false";
}else{
    echo "true";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if - else - elseif</title>
</head>

<body>
    <?php
        // if($idade >= 18){
        //     echo "<h1 style=\"color:green\">Autorizado</h1>";
        // }else {
        //     echo "<h1 style='color:red'>Negado<h1>";
        // }
    ?>
    <?php
        if($idade >= 18){
            ?>
    <h1 style="color:green">Autorizado</h1>
    <?php
        }else {
            ?>
    <h1 style="color:red">Negado<h1>
            <?php
        }
    ?>
</body>

</html>