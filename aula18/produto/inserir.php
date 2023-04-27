<?php
 require_once "../conexao.php";
 $nome = $_POST["nome"];
 $descricao = $_POST["descricao"];
 $preco = $_POST["preco"];
 //string com o comendo sql para ser executoado no db
 $sql = "INSERT INTO `produto` (`nome`, `descrição`, `preco`, `foto`) VALUES ('$nome', '$descricao', '$preco', 'semfoto.png');";
 echo $sql;
 //prepara o slq para ser executado no banco de dados
 $comando=$conexao->multi_query($sql);
 //adiciona os valores nos parametros
 //$comando->bind_param("ssds","a","b",1,"c" );
 //executa o sql - comando no banco de dados
 //$comando->execute();
 //header("location: form.php");
