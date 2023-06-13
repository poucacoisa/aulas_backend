<?php
require_once "consulta.php"?>
<?php require_once "../template/cabecalho.php";?>
<div class="container">
    <p>hellow word</p>
    <h1>cadastro</h1>
    <hr>
    <form action="<?php echo isset($exame) ? 'atualizar.php': "inserir.php"?>" method="post" enctype ="multipart/form-data">
        <label for="nome" class="form-label">Nome</label><br>
        <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $exame['nome'] ??"";?>"><br>
        <input type="hidden" name="id" id="id" value="<?php echo $exame['id'] ??"";?>"><br>
        <label for="tipo" class="form-label" >Tipo</label><br>
        <input type="text" name="tipo" id="tipo"><?php echo $exame['tipo'] ??"";?> <br>
        <label for="preco" class="form-label" >resultado</label><br>
        <input class="form-control" type="number" step= "0.01" name="resultado" id="resultado" value="<?php echo $exame['resultado'] ??"";?>"><br>
        <label for="foto" class="form-label" >Data</label><br>
        <input class="form-control" type="date" name="data" id="data" value="<?php echo $exame['data']??"";?>"><br><br>
        <button type="submit" class="btn btn-dark" >cadastrar</button><br>

    </form>
</div>  
<?php require_once "../template/rodape.php";?>