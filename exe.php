<h2>ordenação</h2>
<?php
    $nomes = [
        "murilo",
        "poliana",
        "dalva",
        "lavinia",
        "camila",
        "kaua"

    ];

    //Algoritmo Select sort
    //quick sort
    for($c = 0; $c <=4; $c++){
        for($i = 1;$i <= 5; $i++){
            if($nomes[$c] > $nomes[$i]){
                 $celbranco = $nomes[$i];
                 $nome[$i] = $nomes[$c];
                 $nomes[$c] = $celbranco;
        
     }
  }
}
    var_dump($nomes);
    
    
    // camila,dalva,kaua,lavinia,murilo,poliana
    ?>
    