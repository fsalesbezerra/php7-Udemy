<?php

$jsonStr = '{"titulo":"Titanic","sinopse":"Um navio colide com um ice berg e afunda","ano":2020,"horarios":["16:00","20:00","22:00"]}';

$arrFilme = json_decode($jsonStr);
// var_dump($arrFilme);
echo "<p>Titulo: <strong>".$arrFilme->titulo."</strong></p>";
echo "<p>Sinopse: <strong>".$arrFilme->{"sinopse"}."</strong></p>";
echo "<p>Ano: <strong>".$arrFilme->ano."</strong></p>";



for($i = 0; $i < count($arrFilme->horarios); $i++){
    echo "<p>Horários: <strong>".$arrFilme->horarios[$i]."</strong></p>";
}
?>