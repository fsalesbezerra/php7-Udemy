<?php 

function Leitura(string $arquivo){
    $fp = fopen($arquivo, "r"); //abre para leitura
    $texto = fread($fp, filesize($arquivo));
    fclose($fp);
    return $texto;
}

?>