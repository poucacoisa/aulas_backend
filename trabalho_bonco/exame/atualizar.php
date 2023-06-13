<?php
require_once "../conexao.php";

 $id = $_POST["id"];
 $nome = $_POST["nome"];
 $tipo = $_POST["tipo"];
 $preco = $_POST["resultado"];
 $data = $_POST["data"];
 //string com o comendo sql para ser executoado no db
 $sql = "UPDATE exame SET `nome`=?, `tipo`=?, `resultado`=?, `data`=? WHERE  `id`=?;";
 //prepara o slq para ser executado no banco de dados
 $comando=$conexao->prepare($sql);
 //adiciona os valores nos parametros
 $comando->bind_param("ssdsi", $nome, $tipo, $resultado, $data,$id);
 //executa o sql - comando no banco de dados
 $comando->execute();
 //abre o arquivo form.php
 header("location: index.php");
