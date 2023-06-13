<?php require_once "consultao.php";?>
<?php require_once "../template/cabecalho.php";?>
    <div class="container">

    
    <h1>hellow word!</h1>
    <hr>
    <div class="text-end">
        <a href="form.php" class=" btn btn-success">inserir</a>
    </div>
    <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">nome</th>
      <th scope="col">resultado</th>
      <th scope="col">data</th>
      <th scope="col" width ="25%">tipo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($exames as $exame) {?>
      <tr>
      <th scope="row"><?php echo $exame["nome"]; ?> </th>
      <td><?php echo $exame["resultado"]; ?></td>
      <td><?php echo $exame["data"]; ?></td>
      <td class="text-end">
        <a href="apagar.php?id=<?php echo $exame["id"]; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>Excluir</a>
        <a href="form.php?id=<?php echo $exame["id"]; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>Atualizar</a>
      </td>
    </tr><?php } ?>

  </tbody>
</table>
    </div> 
  <?php require_once "../template/rodape.php";?>
