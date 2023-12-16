<?php


$pessoa = [
    "nome"=> "Gabriel",
    "idade"=> "19",
    "email"=> "gabriel@gmail.com"
];
$work = [
    "empresa"=> "Google",
    "cargo"=> "Desenvolvedor",
    "anos"=> "4"
];
//operador de União +
$all = $pessoa + $work;;


//operador de Igualdade ==
var_dump($pessoa == $work);


//operador de Diferença !=
var_dump($pessoa == $work);

?>