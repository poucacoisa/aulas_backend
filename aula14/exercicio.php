<?php

if(isset($_POST['numero1']) && isset($_POST['numero2'])){
    $result = $_POST['numero1'] + $_POST['numero2'];
    echo $result;
}else{
   //echo "voce deveria informar valores;
   // faz um redirecionamente
   header("Location: form1.html");
}
 
 ?> 