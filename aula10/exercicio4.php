<?php
$block1 = [
    "nome" => "poliana",
    "nota3" => 7,
    "nota2" => 9
];
$block2 = [
    "nome" => "Murilo",
    "nota3" => 8,
    "nota2" => 5
];
$block3 = [
    "nome" => "Andre",
    "nota3" => 6,
    "nota2" => 7
];
$tabela = [$block1, $block2, $block3];
foreach ($tabela as $key => $value) {
    echo $value["nome"] ."<br>". $value["nota3"]."<br>" . $value["nota2"] ."<br>"."<br>";
}
?>
