<?php
$host = "127.0.0.1";
$port = "3306";
$user = "root";
$password = "";
$database = "db_catalogo_3ifoa";
 //faz a conexão do php com o mysql
$conexao = new mysqli($host, $user, $password, $database, $port);
//verifica a conexão
if($conexao -> connect_error){
    echo "Foi encontrado o erro :" . $conexao ->connect_error;
    die();
}