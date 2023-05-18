<?php
 require_once "../conexao.php";
 if(isset($_POST["descricao"])&& isset($_POST["descricao"])&& isset($_POST["preco"])){
require_once "salvar_foto.php";
 $id = $_POST["id"];
 $nome = $_POST["nome"];
 $descricao = $_POST["descricao"];
 $preco = $_POST["preco"];
 $foto = $nome_arquivo;
 //string com o comendo sql para ser executoado no db
 $sql = "UPDATE produto SET `nome`=?, `descrição`=?, `preco`=?, `foto`=? WHERE  `idproduto`=?;";
 //echo $sql;
 //prepara o slq para ser executado no banco de dados
 $comando=$conexao->prepare($sql);
 //adiciona os valores nos parametros
 $comando->bind_param("ssdsi", $nome, $descricao, $preco, $foto,$id);
 //executa o sql - comando no banco de dados
 $comando->execute();
 }
 //abre o arquivo form.php
 header("location: form.php");
