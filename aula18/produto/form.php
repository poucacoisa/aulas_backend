<?php
require_once "consulta_por_id.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>hellow word</p>
    <h1>cadastro de produto</h1>
    <hr>
    <form action="<?php echo isset($produto) ? 'atualizar.php': "inserir.php"?>" method="post">
        <label for="nome">Nome</label><br>
        <input type="text" name="nome" id="nome" value="<?php echo $produto['nome'] ??"";?>"><br>
        <input type="hidden" name="id" id="id" value="<?php echo $produto['idproduto'] ??"";?>"><br>
        <label for="descricao">Descrição</label><br>
        <textarea name="descricao" id="descricao"><?php echo $produto['descrição'] ??"";?> </textarea><br>
        <label for="preco">valor</label><br>
        <input type="number" step= "0.01" name="preco" id="preco" value="<?php echo $produto['preco'] ??"";?>"><br>
        <label for="foto">foto</label><br>
        <input type="file" name="foto" id="foto" value="<?php echo $produto['foto']??"";?>"><br><br>
        <button type="submit">cadastrar</button><br>

    </form>
    
</body>
</html>