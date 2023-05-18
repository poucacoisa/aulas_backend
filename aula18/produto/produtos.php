<?php require_once "consulta_todos.php"?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="container">

    
    <h1>Produtos!</h1>
    <hr>
    <div class="text-end">
        <a href="form.php" class=" btn btn-success">inserir produto</a>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">nome</th>
      <th scope="col">preço</th>
      <th scope="col">foto</th>
      <th scope="col">acoes</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($produtos as $produto) {?>
      <tr>
      <th scope="row"><?php echo $produto["nome"]; ?> </th>
      <td><?php echo $produto["preco"]; ?></td>
      <td><img src="../uploads/<?php echo $produto["foto"]; ?>" alt="sem foto" height ="40px" wi ></td>
      <td>
        <a href="excluir.php?id=<?php echo $produto["idproduto"]; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>Excluir</a>
        <a href="form.php?id=<?php echo $produto["idproduto"]; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>Atualizar</a>
      </td>
    </tr><?php } ?>

  </tbody>
</table>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>