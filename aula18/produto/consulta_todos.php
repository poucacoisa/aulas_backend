<?php
 require_once "../conexao.php";

 $sql = "SELECT * FROM  `produto` where categoria like %?%";

 //echo $sql;
 //prepara o slq para ser executado no banco de dados
 $comando=$conexao->prepare($sql);
 $categoria = '%'.$GET["categoria"].'%' ?? "%%";
 $comando -> bind_param("s, $categoria");

 //adiciona os valores nos parametros
 $comando->execute();

 $resultado = $comando ->get_result();

 //pega todas as linhas do resultado
 //cria um vetor vazio
 $produtos =[];

 while($produto = $resultado ->fetch_assoc()){
 //adiciona o produto (linha do resultado no vetor)
 $produtos[] = $produto;
 }





