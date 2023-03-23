<?php

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $result = $_GET['numero1'] + $_GET['numero2'];
    echo $result;
}else{
   //echo "voce deveria informar valores;
   // faz um redirecionamente
   header("Location: form1.html");
}
 
 ?> 