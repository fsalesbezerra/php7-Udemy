<?php
require_once("vendor/autoload.php");

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

//CRIAR LOG
$log = new Logger('banco_de_dados');
$log->pushHandler(new StreamHandler('path/to/warning.log', Logger::WARNING));

//ADD LOG

$log->warning('Cuidado, o arquivo não foi encontrado');
$log->error('Erro ao tentar abrir o arquivo');


?>