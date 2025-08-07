<?php
include "conexao.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Deleta do banco de dados
    $sql = "DELETE FROM pessoas WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Pessoa excluída com sucesso.";
    } else {
        echo "Erro ao excluir: " . $conn->error;
    }

    // Redireciona de volta para o index
    header("Location: index.php");
    exit();
} else {
   
}
?>