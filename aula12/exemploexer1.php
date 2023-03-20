<?php
$tabuada = $_GET['tabuada'];
echo "o valor  a ser tabuado é " . $_GET['tabuada'] . "<br>";
for ($i=0; $i < 1001; $i++) { 
    echo  $_GET['tabuada']  * $i . "<br>" ;
}   