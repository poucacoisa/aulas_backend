<?php
if(isset($_POST['usuario']) and isset($_POST['senha'])){
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
 require_once "../conexao.php";
 $sql = "SELECT * FROM  `usuario` WHERE  `login`= ?;";

 //echo $sql;
 //prepara o slq para ser executado no banco de dados

 $comando=$conexao->prepare($sql);
 //adiciona os valores nos parametros

 $comando->bind_param("s", $usuario);
 //executa o sql - comando no banco de dados
 $comando->execute();
 //pega o resultado da consulta

 $resultado = $comando ->get_result();

 //pegar a primeira linha do resultado

 $usuario = $resultado ->fetch_assoc();

 if($usuario){
    echo "existe um usuario com esse login";
    if(password_verify($senha, $usuario['senha'])){
    //inicia a sessão
        session_start();
    // cria a variavel sessão
    $_SESSION['usuario'] = $usuario;
    //redireciona para produtos
    header("location: ../produtos/index.php");
        }

        else{ echo "senha invalida";
            
}}else{
    echo "não existe um usuario com esse login";
 }
}

