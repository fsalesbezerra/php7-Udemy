<?php
$arrIds = [];
if(filter_input(INPUT_POST, "btnSubmit", FILTER_SANITIZE_STRING)){
    $checkboxChecked = filter_input(INPUT_POST, "ckUsuarios", FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY);

    foreach($checkboxChecked as $ck){
        $arrIds[] = $ck;

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkbox</title>
</head>

<body>
    <div>
        <form action="" method="post">
            <label for="">
                <input type="checkbox" name="ckUsuarios[]" value="1"> HTML
            </label>
            <br>
            <label for="">
                <input type="checkbox" name="ckUsuarios[]" value="2"> CSS
            </label>
            <br>
            <label for="">
                <input type="checkbox" name="ckUsuarios[]" value="3"> JS
            </label>
            <br>
            <input type="submit" name="btnSubmit" value="Enviar" />

        </form>
    </div>
    <div style="padding:10px; background-color:#eee;">
        <?php
        for($i = 0; $i < count($arrIds); $i++){
            echo "<p>IDS Selecionado: {$arrIds[$i]}</p>";
        }
    ?>
    </div>
</body>

</html>