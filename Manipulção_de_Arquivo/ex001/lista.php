<?php

    $arquivo2 = "usuarios.json";
    $usuarios = [];

    if(file_exists($arquivo2)){
        $usuarios = json_decode(file_get_contents($arquivo2), true);
    }






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários cadastrados </title>
</head>
<style>

table{
    border-collapse:collapse;
    width: 100%;
}

th,td{
    padding: 5px;
    text-align: left;
    border: 1px solid black;
}


</style>
<body>
  <fieldset>
    <legend><h1>Usuários cadastrados</h1></legend>

    <table >
            <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Id</th>
            </tr>

        <?php foreach($usuarios as $u):?>
        <tr> 
        
        <td><?php    echo $u["nome"];     ?>   </td>
        <td><?php    echo $u["email"];      ?> </td>
        <td><?php    echo $u["id"];    ?> </td>
        
        </tr>
       
        
        <?php  endforeach  ?>
            

        </table>

  
</body>
</html>