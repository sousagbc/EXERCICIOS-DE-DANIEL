<?php
    $nomef = $_POST['nome'];
    $salariof = $_POST['salario'];
    $comissaof = $_POST['comissao'];
    $comissao = $comissaof * 0.04 ;
    $calculador_de_vendas =  $salariof + $comissaof;
    
    echo nl2br("O Salário do Funcinário é $nomef , recebendo um Salário Fixo de R$ $salariof, juntamente com 4% de comissão do valor de  R$ $comissaof advindo da venda de produtos.\n");
    echo nl2br("Ficou com um Sálario total de R$ $calculador_de_vendas.\n\n " );
    echo nl2br("Nome : $nomef.\n");
    echo nl2br("Salário Fixo : R$ $salariof.\n");
    echo nl2br("Valor Recebido da comissão : R$ $comissao.\n");
?>