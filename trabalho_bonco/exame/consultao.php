<?php
 require_once "../conexao.php";

 $sql = "SELECT * FROM  exame ";

 //echo $sql;
 //prepara o slq para ser executado no banco de dados
 $comando=$conexao->prepare($sql);

 //adiciona os valores nos parametros
 $comando->execute();

 $resultado = $comando ->get_result();

 //pega todas as linhas do resultado
 //cria um vetor vazio
 $exames =[];

 while($exame = $resultado ->fetch_assoc()){
 //adiciona o produto (linha do resultado no vetor)
 $exames[] = $exame;
 }





