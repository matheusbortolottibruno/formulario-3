<?php
include "conexao.php";  

// Recebe o ID via GET
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
// GET recebe

// Consulta a pessoa pelo ID
$sql = "SELECT * FROM pessoas WHERE id = $id";
$resultado = $conn->query($sql);
$pessoa = $resultado->fetch_assoc();

if (!$pessoa) {
    echo "Pessoa não encontrada.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Detalhes da Pessoa</title>
    <link rel="stylesheet" href="detalhe.css" />
</head>
<body>

   

    <p><strong>ID:</strong> <?= htmlspecialchars($pessoa['id']) ?></p>
    <p><strong>Nome:</strong> <?= htmlspecialchars($pessoa['nome']) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($pessoa['email']) ?></p>
    <p><strong>Idade:</strong> <?= htmlspecialchars($pessoa['idade']) ?></p>
    <p><strong>Cidade:</strong> <?= htmlspecialchars($pessoa['cidade']) ?></p>

    <a href="../lista.php">← Voltar para a lista</a>

</body>
</html>