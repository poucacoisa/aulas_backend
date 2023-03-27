<?php 
$value = $_GET[''];
$vetor = [];
$vetor[] = "yellow";
$vetor[] = "green";
$vetor[] = "blue";
$vetor[] = "purple";
$vetor[] = "red";
$vetor[] = "pink";
$vetor[] = "orange";
$vetor[] = "grey";
$vetor[] = "white";
foreach ($vetor as $key => $value) {
    echo "<a href='aula15.php?cor=$value'>Mudar para $value</a>"."<br>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
</body>
</html>