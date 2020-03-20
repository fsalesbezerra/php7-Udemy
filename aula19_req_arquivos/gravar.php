<?php 

function Gravar(string $texto, string $arquivo){
    $fp = fopen($arquivo, "a+"); //abre para leitura
    fwrite($fp, "{$texto} \r\n");
    fclose($fp);
}

?>