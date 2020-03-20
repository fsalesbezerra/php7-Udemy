<?php

$req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);
$arquivo = "usuario.txt";

switch($req){
    case 1:
        // sleep(1); pausa na execução
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
        $sobrenome = filter_input(INPUT_POST, "sobrenome", FILTER_SANITIZE_STRING);

        $str = "Nome: {$nome}|Sobrenome: {$sobrenome}";

        $fp = fopen($arquivo, "w"); //a+
        if(fwrite($fp, "{$str}")){
            echo "1";
        }else{
            echo "0";
        }
        fclose($fp);
    break;

    case 2:
        $fp = fopen($arquivo, "r");
        $texto = fread($fp, filesize($arquivo));
        fclose($fp);
        echo $texto;
    break;

    default:
        echo "nada";
    break;
}