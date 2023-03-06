<h2>Exercício 2</h2>

<p>
    Crie um vetor com os nomes, conforme exemplo abaixo:
        <pre>
          --------- 
       0 |Murilo   | 
          --------- 
       1 |Poliana  |
          --------- 
       2 |Dalva    |
          --------- 
       3 |Lavinia  |
          --------- 
       4 |Kaua     |
          --------- 
    </pre>
</p>
<p>
    Imprima os nomes do vetor em formato de lista ordenada, utilizando um laço de repetição: ex:
        <br>
        1. Murilo <br>
        2. Poliana <br>
        3. .... <br>
</p>
<?php
$nome = [];
$nome[] = "Murilo";
$nome[] = "Poliana";
$nome[] = "Dalva";
$nome[] = "Lavinia";
$nome[] = "Kaua";
for($contador = 0; $contador <5  ; $contador++)
        echo "<li> ".$nome[$contador]."</li>";
?>
