<?php
function AbrirConexao(){
    $conn = new PDO("mysql:host=localhost;dbname=curso_php;chartset=utf8", 'root', '');
    return $conn;
}
?>