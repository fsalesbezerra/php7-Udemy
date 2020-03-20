<?php
require("conexao.php");

try{
    AbrirConexao();
}catch(Exception $e){
    echo "Mensagem: ".$e->getMessage(). "<br>";
    echo "Linha: ".$e->getLine(). "<br>";
    echo "Arquivo: ".$e->getFile(). "<br>";
}
// }catch(PDOException $e){
//     echo "Mensagem: ".$e->getMessage(). "<br>";
//     echo "Linha: ".$e->getLine(). "<br>";
//     echo "Arquivo: ".$e->getFile(). "<br>";
// }


// try{
//     //tente fazer algo
// }catch(Exception $e){
//     //tratar os erros
// }finally{
//     //bloco chamado antes de finalizar a estrutura
// }


?>