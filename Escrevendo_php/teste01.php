<?php
$arquivo = fopen("arquivo.txt", "r");
//enquanto o fim do arquivo não for alcançado
while (!feof($arquivo)) 
{
    //Lê uma linha do arquivo
    $linha = fgets($arquivo);
    echo $linha . "<br>";
}
fclose($arquivo);
?>