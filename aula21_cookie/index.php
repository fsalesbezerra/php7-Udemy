<?php 
//Criamos uma cookie
// setcookie("nome","valor", tempo_de_vida);
//obter o valor de uma cookie
// $_COOKIE["nome"];
//Alterar o valor de um cookie
// setcookie("nome", "valor_novo");
//Deletar o cookie
// setcookie("nome", "valor", time() - 1);


$req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);

switch($req){
    case 1:
        Criar();
    break;
    case 2:
        Ler();
    break;
    case 3:
        Alterar();
    break;
    case 4:
        Deletar();
    break;
}

function Criar(){
    echo "Criar";
    setcookie("nome", "Fernando", time() + 100);
}
function Ler(){
    echo filter_input(INPUT_COOKIE, "nome", FILTER_SANITIZE_STRING);
}
function Alterar(){
    echo "Alterar";
    setcookie("nome", "Ariane");
} 
function Deletar(){
    echo "Deletar";
    setcookie("nome", "Fernando", time() - 1);
}
?>