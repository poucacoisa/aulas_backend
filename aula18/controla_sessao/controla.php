<?php
//sempre que for trabalhar com sessões é necessario
//iniciar a sessão
session_start();
//verifica se existe a variavel de sessão chamada usuário
if(!isset($_SESSION["usuario"])){
    header("location: ../controla_sessao/form_login.php");
}