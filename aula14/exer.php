<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mudar cor de fundo </title>
    <style>
       <!--
        <?php
$a=$_POST['cor'];
$b="white"; // cor inicial
?>
--> 
        body {
            background-color: <?php  echo $a?>;
        }
    </style>
</head>
<body>
    <form method="post" >
        <input type="color" name="cor">
        <input type="submit" value="Mudar Cor">
    </form>
</body>
</html>