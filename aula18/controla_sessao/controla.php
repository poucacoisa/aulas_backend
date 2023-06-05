<?php
//sempre que for trabalhar com sessões é necessario
//iniciar a sessão
session_start();
//verifica se existe a variavel de sessão chamada usuário
if(!isset($_SESSIOn["usuario"])){
    header("location: ../controla_sessao/form_login.php");
}