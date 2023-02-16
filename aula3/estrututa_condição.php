<h2></h2>
<hr>
<p>
    a estrutura de condição é utilizada para avaliar qual instrução deve ser executada, dada uma condição.
    se a condição dor verdadeira(true) executa a instrução1, caso contrário executa a instrução2.

<strong></strong>
<pre>
    if (<em>condição</em> ) {
        //instrução 1
    }else{
        //instrução 2
    }
</pre>
</p>
<?php
/* para passar de ano é necessário tirar no minimo 6 pontos em cada disciplina. Murilo tirou .... Ele foi aprovado ou não ?
*/
$nota_do_murilo = 10;
$faltas = 0;
if($nota_do_murilo >=6 && $faltas < 75){
    echo "Murilo foi aprovado!";
} else{ 
    echo "Murilo foi reprovado!";
}
?>
<strong>exemplo 2</strong>
<p> O aluno para ser aprovado deve ter nota superior a 6 pontos, para fazer o exame final precisa ter tirado nota maior que 3 pontos e menor que 6 pontos, menores que 3 terão reprovação direta.</P>
<?php
$nota = 6 ;
if ($nota >= 6){
    echo "Aprovado";
} else {
    if($nota > 3){
        echo "faz exame final";
    } else {
        echo "reprovado";
    }
}
?>

