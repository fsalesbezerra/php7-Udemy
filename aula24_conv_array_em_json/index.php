<?php 
// {
//     "titulo" : "Titanic",
//     "sinopse" : "Um navio colide com um ice berg e afunda",
//     "ano" : 2020,
//     "horario" : ["16:00", "20:00", "22:00"]
    
//     }



$arrayFilme = ["titulo" =>"Titanic",
 "sinopse" => "Um navio colide com um ice berg e afunda", 
 "ano" => 2020, 
 "horarios" => array("16:00", "20:00", "22:00"),
];


// var_dump($arrayFilme);

//transformando um array em json
$jsonStr = json_encode($arrayFilme);

echo $jsonStr;
?>