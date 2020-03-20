<?php
//include requisa o arquivo
//require requer o arquivo (obriga)

include("gravar.php");
Gravar("Include", "file.txt");

// include("ler.php");
// include_once("ler.php");

// require("ler.php");
require_once("ler.php");
$texto = Leitura("file.txt");
echo $texto;



?>