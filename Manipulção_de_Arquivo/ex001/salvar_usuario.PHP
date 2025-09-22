<?php
$arquivo_json = "usuarios.json";

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o método é POST

    $nome = $_POST["nome"];
    $email = $_POST["email"];

    if (file_exists($arquivo_json)) { // Verifica se o arquivo existe
        $conteudo_json = file_get_contents($arquivo_json); 
        $usuarios = json_decode($conteudo_json, true); // Decodifica o JSON em array associativo

        if ($usuarios === null || !is_array($usuarios)) { // Se não tiver dados válidos
            $usuarios = []; // Cria um array vazio
        }
    } else {
        $usuarios = []; // Caso o arquivo não exista, cria array vazio
    }

    $novo_id = count($usuarios) + 1; // Incrementa o ID

    $novo_usuario = [
        'id' => $novo_id,
        'nome' => $nome,
        'email' => $email
    ];

    $usuarios[] = $novo_usuario; // Corrigido: adiciona o novo usuário ao array

    $novo_conteudo_json = json_encode($usuarios, JSON_PRETTY_PRINT);

    if (file_put_contents($arquivo_json, $novo_conteudo_json)) {
        header("Location: CADASTRO_SUCESS.html");
    } else {
      header("Location: CADASTRO_ERROR.html");
    }

} else {
    echo "Método de requisição inválido.";
}

?>

