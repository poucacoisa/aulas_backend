<?php
require_once "consulta_por_id.php"?>
<?php require_once "../template/cabecalho.php";?>
<div class="container">
    <p>hellow word</p>
    <h1>cadastro de produto</h1>
    <hr>
    <form action="<?php echo isset($produto) ? 'atualizar.php': "inserir.php"?>" method="post" enctype ="multipart/form-data">
        <label for="nome" class="form-label">Nome</label><br>
        <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $produto['nome'] ??"";?>"><br>
        <input type="hidden" name="id" id="id" value="<?php echo $produto['idproduto'] ??"";?>"><br>
        <label for="descricao" class="form-label" >Descrição</label><br>
        <textarea name="descricao" id="descricao"><?php echo $produto['descrição'] ??"";?> </textarea><br>
        <label for="preco" class="form-label" >valor</label><br>
        <input class="form-control" type="number" step= "0.01" name="preco" id="preco" value="<?php echo $produto['preco'] ??"";?>"><br>
        <label for="foto" class="form-label" >foto</label><br>
        <input class="form-control" type="file" name="foto" id="foto" value="<?php echo $produto['foto']??"";?>"><br><br>
        <button type="submit" class="btn btn-dark" >cadastrar</button><br>

    </form>
</div>  
<?php require_once "../template/rodape.php";?>