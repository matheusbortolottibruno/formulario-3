<?php
include "conexao.php"; //conexão com o banco

// Verifica se o ID foi informado
if (!isset($_GET["id"])) {
    echo "ID não informado.";
    exit;
}

$id =$_GET["id"]; 
$sql = "SELECT * FROM pessoas WHERE id = $id";
$resultado = $conn->query($sql);

// Verifica se encontrou o registro
if ($resultado->num_rows == 0) {
    echo "Pessoa não encontrada.";
    exit;
}

$pessoa = $resultado->fetch_assoc(); // dados da pessoa
?>

<h2>Detalhes da Pessoa</h2>
<p><strong>ID:</strong> <?= $pessoa["id"] ?></p>
<p><strong>Nome:</strong> <?= $pessoa["nome"] ?></p>
<p><strong>Email:</strong> <?= $pessoa["email"] ?></p>
<p><strong>Idade:</strong> <?= $pessoa["idade"] ?></p>
<p><strong>Cidade:</strong> <?= $pessoa["cidade"] ?></p>

<a href="index.php">Voltar para a lista</a>
