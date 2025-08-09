<?php
include "conexao.php";


if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "SELECT * FROM pessoas WHERE id = $id";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        $pessoa = $resultado->fetch_assoc();
    } else {
        echo "Pessoa não encontrada.";
        exit();
    }
} else {
    echo "ID inválido.";
    exit();
}
?>

<h2>Editar Pessoa</h2>
<form action="editaratualizar.php" method="post">
    <input type="hidden" name="id" value="<?= $pessoa['id'] ?>">
    Nome: <input type="text" name="nome" value="<?= $pessoa['nome'] ?>"><br><br>
    Email: <input type="email" name="email" value="<?= $pessoa['email'] ?>"><br><br>
    Idade: <input type="number" name="idade" value="<?= $pessoa['idade'] ?>"><br><br>
    Cidade: <input type="text" name="cidade" value="<?= $pessoa['cidade'] ?>"><br><br>
    <input type="submit" value="Salvar Alterações">
</form>
