<?php
$host = "127.0.0.1";
$port = "3306";
$user = "root";
$password = "";
$database = "exames";
$conexao = new mysqli($host, $user, $password, $database, $port);
if($conexao -> connect_error){
    echo "Foi encontrado o erro :" . $conexao ->connect_error;
    die();
}