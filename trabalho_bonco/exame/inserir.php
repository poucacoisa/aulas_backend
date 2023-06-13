<?php require_once "../conexao.php";

 $nome = $_POST["nome"];
 $tipo = $_POST["tipo"];
 $resultado = $_POST["resultado"];
 $data =$_POST["data"];
 //string com o comendo sql para ser executoado no db
 $sql = "INSERT INTO exame (`nome`, `tipo`, `resultado`, `data`) VALUES (?,?,?,?);";
 //echo $sql;
 //prepara o slq para ser executado no banco de dados
 $comando=$conexao->prepare($sql);
 //adiciona os valores nos parametros
 $comando->bind_param("ssds", $nome, $tipo, $resultado, $data);
 //executa o sql - comando no banco de dados
 $comando->execute();
 //abre o arquivo form.php
 header("location: index.php");

require_once "../template/cabecalho.php"; ?>