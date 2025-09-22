<?php

$frase = $_REQUEST["frase"];

$arquivo = fopen("arquivo.txt", "w");

$frase1 = fwrite($arquivo, "$frase \n");

echo "Frase: <b>$frase</b> salva com sucesso! <br>";

fclose($arquivo);
?>