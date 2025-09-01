<?php
   
   $custodefabrica = $_POST['custodefabrica'];
   

   if($custodefabrica <= 39999 )
   {
    $distribuidor = ($custodefabrica * 0.05 );
    $operaçao = ($custodefabrica + $distribuidor);
    $real1 = number_format($operaçao,2,'.','');
    //não tem impostos 
    echo(" O valor de R$ $custodefabrica juntamente com as taxas é igual a R$ $operaçao  ");


   }

   elseif ($custodefabrica >= 40000 && $custodefabrica <= 69999)
   {
    $distribuidor2 = ($custodefabrica * 0.10) ;
    $impostos = ($custodefabrica *0.15 );
    $operaçao2 = ($custodefabrica + $distribuidor2 + $impostos);
    $real2 = number_format($operaçao2,2,'.','');
    echo("O valor de R$ $custodefabrica juntamente com os taxas é igual a R$ $operaçao2");


   }

   elseif ($custodefabrica > 69999)
   {
      $distribuidor3 = ($custodefabrica * 0.15);
      $impostos2 = ($custodefabrica * 0.20);
      $operaçao3 = ($custodefabrica + $distribuidor3 + $impostos2);
      $real3 = number_format($operaçao3,2,'.','');
      echo("O valor de R$ $custodefabrica juntamente com os taxas é igual a R$ $operaçao3");



   }




?>