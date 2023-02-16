<h2>Estrutura de repetição for</h2>
<p> 
    utilizada para repetir uma sequência de instruções um número predeterminado de vezes.
</p>
<p>
    <pre>
        for(inicio; condição; passo){
            //instruções a serem repetidas
        }
    </pre>
    </p>
    <?php
    for($contador = 0; $contador < 10 ; $contador++)
        echo "2x $contador =" .$contador * 2 . "<br>";
    ?>
