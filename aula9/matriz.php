<h2>Matrix</h2>
<?php
$produto1 = [
    "nome" => "notebook",
    "marca" => "dell",
    "preco" => 5000
];
$produto2 = [
    "nome" => "camera",
    "marca" => "nikon",
    "preco" => 3000
];
$produto3 = [
    "nome" => "smarthphone",
    "marca" => "lg",
    "preco" => 1200
];
$tabela = [$produto1, $produto2, $produto3];
var_dump($tabela);
echo $tabela[1]["marca"];
//json - Javascript Object Notation
echo "<br><br><br><br>";
echo json_encode($tabela);
?>