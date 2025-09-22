<?php
    $basemaior = $_POST['bsmaior'];
    $basemenor = $_POST['bsmenor'];
    $altura = $_POST['altura'];
    $Calculo = ($basemaior + $basemenor)*$altura/2;
    echo nl2br("O Cálculo da área do trapezio foi igual a $Calculo M²\n\n");
    echo nl2br("Informações Fornecidas : \n\n");
    echo nl2br("- Base Maior informada : $basemaior M²\n ");
    echo nl2br("- Base Menor Informada : $basemenor M²\n ");
    echo nl2br("- Altura Informada : $altura M²\n");

?>