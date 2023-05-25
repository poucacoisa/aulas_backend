<?php require_once "consulta_todos.php"?>
<?php require_once "../template/cabecalho.php";?>
    <div class="container">
    <h1>Usuarios</h1>
    <hr>
    <div class="text-end">
        <a href="form.php" class=" btn btn-success">Inserir usuario</a>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">nome</th>
      <th scope="col">login</th>
      <th scope="col">foto</th>
      <th scope="col" width ="25%" >acoes</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($usuarios as $usuario) {?>
      <tr>
      <th scope="row"><?php echo $usuario["nome"]; ?> </th>
      <td><?php echo $usuario["login"]; ?></td>
      <td><img src="../uploads/<?php echo $usuario["foto"]; ?>" alt="sem foto" height ="40px" wi ></td>
      <td class="text-end">
        <a href="excluir.php?id=<?php echo $usuario["idusuario"]; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>Excluir</a>
        <a href="form.php?id=<?php echo $usuario["idusuario"]; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>Atualizar</a>
      </td>
    </tr><?php } ?>

  </tbody>
</table>
    </div>
  <?php require_once "../template/rodape.php";?>

