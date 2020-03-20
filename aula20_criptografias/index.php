<?php
$s = sha1("Ola, mundo");
echo $s;

echo "<br>";

$m = md5("PHP cript");
echo $m;

echo "<br>";

$b = base64_encode("teste");
echo $b;

echo "<br>";
echo base64_decode($b);




?>