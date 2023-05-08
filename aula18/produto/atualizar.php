<?php
 require_once "../conexao.php";
 if(isset($_POST["descricao"])&& isset($_POST["descricao"])&& isset($_POST["preco"])){
 $nome = $_POST["nome"];
 $descricao = $_POST["descricao"];
 $preco = $_POST["preco"];
 //string com o comendo sql para ser executoado no db
 $sql = "INSERT INTO `produto` (`nome`, `descrição`, `preco`, `foto`) VALUES (?,?, ?, ?);";
 //echo $sql;
 //prepara o slq para ser executado no banco de dados
 $comando=$conexao->prepare($sql);
 //adiciona os valores nos parametros
 $comando->bind_param("ssds", $nome, $descricao, $preco, $foto);
 //executa o sql - comando no banco de dados
 $comando->execute();
 }
 //abre o arquivo form.php
 header("location: form.php");
