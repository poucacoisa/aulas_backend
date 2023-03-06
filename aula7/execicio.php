<?php
 $murilo = [];
 $murilo[] = "Murilo";
 $murilo[] = 3;
 $murilo[] = 4;
 $murilo[] = $murilo[1] + $murilo[2]/2;
 $murilo[] = "reprovado";
 
if ($murilo[3] >= 6){
    $murilo[4] = "aprovado";
 }else{
    $murilo[4] = "reprovado";
 }
var_dump($murilo[4])

?>