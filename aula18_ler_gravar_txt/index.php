<?php

function Gravar(string $texto, string $arquivo){
    $fp = fopen($arquivo, "a+"); //abre para leitura
    fwrite($fp, "{$texto} <br>\r\n");
    fclose($fp);
}

// Gravar("Olá Mundo!", "file.txt");
Gravar(date("d/m/Y H:i:s"), "file_date.txt");




function Leitura(string $arquivo){
    $fp = fopen($arquivo, "r"); //abre para leitura
    $texto = fread($fp, filesize($arquivo));
    fclose($fp);
    return $texto;
}

echo Leitura("file.txt");





?>