<?php
include_once "../template/cabecalho.php";
include_once "../produto/consulta_todos.php";
?>
<!--começo menu-->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

<?php 
$categorias = [];
foreach ($produtos as $key => $produto) : 
  if(!in_array($produto["categoria"],$categorias)):
$categorias[] = $produto["categoria"];
?>
        <li class="nav-item">
          <a class="nav-link" href="index.php?categoria=<?= $value["categoria"];?>"></a>
        </li>
        <?php 
      endif; endforeach; ?>
        <li class="nav-item">
          <a class="nav-link" href="../produto/index.php  ">Acesso restrito</a>
        </li>


      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--final menu-->
<hr>

<!--lista de produtos-->
<div class="container">
    <div class="row row-cols-4 g-4">
    
    <?php foreach ($produtos as $key => $produto) : ?>
     <div class="col">
      <div class="card">
        <img src="../uploads/<?php echo $produto["foto"]; ?>" alt=  "imagem ">
        <div class="card-body">
          <h5 class="card-title">"<?php echo $produto["nome"];?>"</h5>
          <a href="#" class="btn btn-primary">ver produto</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
</div>
    
</div>
<hr>
<!--final produtos-->
<?php
include_once "../template/rodape.php";
?>