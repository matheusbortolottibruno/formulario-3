<?php
include "conexao.php";

// Verifica se os dados foram enviados corretamente via POST
if (isset($_POST['id'], $_POST['nome'], $_POST['email'], $_POST['idade'], $_POST['cidade'])) {
    $id = intval($_POST['id']);
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = intval($_POST['idade']);
    $cidade = $_POST['cidade'];

    // Prepara (atualização)
    $sql = "UPDATE pessoas SET nome = ?, email = ?, idade = ?, cidade = ? WHERE id = ?";

    // Prepara e executa  com segurança
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssisi", $nome, $email, $idade, $cidade, $id);

    if ($stmt->execute()) {
        echo "Pessoa atualizada com sucesso!<br>";
        echo "<a href='index.php'>Voltar para a lista</a>";
    } else {
        echo "Erro ao atualizar: " . $stmt->error;
    }
} else {
    echo "Dados incompletos. Verifique o formulário.";
}
?>
