<?php

//operador && - as duas condiçoes tem que ser verdadeiras

$fruta = true;
$carne = true;

if ($fruta && $carne){
    echo"Fruta e carne já estão no seu carrinho !";
}else{
    echo"Esta faltando frutas ou carnes no seu carrinho !";
};

//operador || - Uma das condiçoes tem que ser verdadeiras

$fruta = true;
$carne = false;

var_dump($fruta || $carne);





?>