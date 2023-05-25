<?php
 require_once "../conexao.php";
 if(isset($_POST["nome"])&& isset($_POST["login"])&& isset($_POST["senha"])){
//inclui o arquivo para salva a foto
 require_once "salvar_foto.php";
 $nome = $_POST["nome"];
 $login = $_POST["login"];
 $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT) ;
 $foto = $nome_arquivo;
 //string com o comendo sql para ser executoado no db
 $sql = "INSERT INTO `usuario` (`nome`, `login`, `senha`, `foto`) VALUES (?,?, ?, ?);";
 //echo $sql;
 //prepara o slq para ser executado no banco de dados
 $comando=$conexao->prepare($sql);
 //adiciona os valores nos parametros
 $comando->bind_param("ssss", $nome, $login, $senha, $foto);
 //executa o sql - comando no banco de dados
 $comando->execute();
 }
 //abre o arquivo form.php
 header("location: index.php");
