<?php
 require_once "../conexao.php";
 //verifica se foi enviada o param pela url
 if(isset($_GET['id'])){
$id = $_GET["id"];
 //string com o comendo sql para ser executoado no db
 $sql = "DELETE FROM `exame` WHERE  `id`= ?;";
 //prepara o slq para ser executado no banco de dados
 $comando=$conexao->prepare($sql);
 //adiciona os valores nos parametros
 $comando->bind_param("i", $id);
 //executa o sql - comando no banco de dados
 $comando->execute();
 //header("location: form.php");
}
 //abre o arquivo form.php
 header("location: index.php");