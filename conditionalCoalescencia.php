<?php

$user = [
    "id"=> "0",
    "name" => "Gabriel",
    "email"=> "Gabriel@gmail.com",
    "password"=> "123456",
    "age"=> "18"
];


echo $user['name'] ?? 'Não tem nome!';




?>