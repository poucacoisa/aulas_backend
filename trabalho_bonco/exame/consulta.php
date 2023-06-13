<?php
 require_once "../conexao.php";
 //verifica se foi enviada o param pela url

 if(isset($_GET['id'])){
$id = $_GET["id"];
 //string com o comendo sql para ser executoado no db

 $sql = "SELECT * FROM  `exame` WHERE  `id`= ?;";

 //echo $sql;
 //prepara o slq para ser executado no banco de dados

 $comando=$conexao->prepare($sql);
 //adiciona os valores nos parametros

 $comando->bind_param("i", $id);
 //executa o sql - comando no banco de dados

 $comando->execute();
 //header("location: form.php");
 //pega o resultado da consulta

 $resultado = $comando ->get_result();

 //pegar a primeira linha do resultado

 $exame = $resultado ->fetch_assoc();

}
