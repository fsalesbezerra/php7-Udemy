<?php
// $arrayNomes = array("Fer", "Lobo", "Rafa", "Thales");

$arrayNomes = ["Fer", "Lobo", "Rafa", "Thales", "Diego"];
// echo $arrayNomes[0];

for($i = 0; $i < 4; $i++){
    echo $arrayNomes[$i]. "<br>";

}
echo "<hr>";
//count
for($i = 0; $i < count($arrayNomes); $i++){
    echo $arrayNomes[$i]. "<br>";

}
echo "<hr>";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>

<body>
    <select name="slProfessores" id="slProfessores">
        <?php
    for($i = 0; $i < count($arrayNomes); $i++){
        ?>
        <option value="<?= $i; ?>"><?= $arrayNomes[$i]; ?></option>
        <?php
    }
        ?>
    </select>
    <button onclick="alert(document.getElementById('slProfessores').value);">Selecione...</button>
</body>

</html>