<?php
    $qntd = $_POST['qntd'];
    $vetor = array();
    for($i=2; $i<=$qntd; $i++){
        $vetor[0]=0;
        $vetor[1]=1;
        $vetor[$i]= $vetor[$i-1]+$vetor[$i-2];
    }
    echo"<center>";
    echo"<h2>Sequencia de Fibonacci</h2>";
    for($i=0; $i<$qntd; $i++){
        echo"</br>";
        echo"$vetor[$i]";
    }
    echo"</center>";
?>