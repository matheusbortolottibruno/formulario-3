<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Cadastrar Nova Pessoa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php
include "conexao.php"; 

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $cidade = $_POST["cidade"];

    // Insere os dados no banco
    $sql = "INSERT INTO pessoas (nome, email, idade, cidade)
            VALUES ('$nome', '$email', $idade, '$cidade')";

    // Verifica se foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso! <a href='index.php'>Voltar</a>";
        exit;
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<h2>𝗖𝗮𝗱𝗮𝘀𝘁𝗿𝗮𝗿 𝗡𝗼𝘃𝗮 𝗣𝗲𝘀𝘀𝗼𝗮</h2>

<form method="POST">
    Nome: <input type="text" name="nome" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Idade: <input type="number" name="idade" required><br><br>
    Cidade: <input type="text" name="cidade" required><br><br>
    <input type="submit" value="Cadastrar">
</form>
