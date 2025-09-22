<?php

$valor = $_POST['valor'];
$tpinvestimento = $_POST['bancos'];




    if ($tpinvestimento == 'Poupança')
    {
       $valor_original = ($valor);
       $rendimento = ($valor * 0.03);
       $operaçao = ($valor_original + $rendimento);
       echo("O valor de R$ $valor , escolhendo como forma de investimento a $tpinvestimento terá um redimento mensal de 3% , resultando em : R$ $operaçao"); 
    
    
    
    }
    
    elseif($tpinvestimento == 'Fundos de Renda fixa')
    {
        $valor_original2 = ($valor);
        $rendimento2 = ($valor * 0.04);
        $operaçao2 = ($valor_original2 + $rendimento2);
        echo("O valor de R$ $valor , escolhendo como forma de investimento o $tpinvestimento terá um redimento mensal de 3% , resultando em : R$ $operaçao2");
    
    }












?>