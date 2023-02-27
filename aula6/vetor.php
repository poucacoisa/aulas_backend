<h2>vetores</h2>
<p>são estruturas de armazenamento compostas heterogêneas (1-dim), que podem ser indexadas númericamente ou textualmente.</p>
<?php
    //exemplo variaveis simples
    $nota = 6;
    $nota = 3;
 echo $nota ."<br>"; 
    //exemplo vetor indexado númericamente 
    $notas = []; // ooutra forma $notas = array();
    $notas[] = 6;
    $notas[] = 3;
//var_dump($notas);
// imprimir só a primeir nota
echo ($notas[0] + $notas[1])/2;
    // vetores com indice textual
    $notas = [];// cria um vetor vazio
    $notas["debora"] = 7;
    $notas["murilo"] = 7.8;
    $notas["poliana"] = 9;
echo "<p></p>";
echo "A Poliana tirou nota" . $notas["poliana"];
    //vetor ivan
    $valores = [];
    $valores[] = 2;
    $valores[] = 4;
    $valores[] = 8;
    $valores[] = 10;
    $valores[] = 12;
    $valores[] = 14;
    $valores[] = 16;
//ou - valores =[2,4,8,10,12,14,16];
// iprimindo o ocnteudo de um vetor númeri.
    for($i = 0; $i <= 6; $i++){
        echo $valores[$i] . "<br>";
    }
    //somar os valores de um vetor
    $acumuladados = 0;
    for($i=0; $i<=6; $i++){
        $acumuladados =  $acumuladados + $valores[$i];
        echo " A soma dos valores é $acumuladados";
    }

?>
