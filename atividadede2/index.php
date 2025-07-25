<?php
include "conexao.php"; 

// Consulta todos os registros da tabela
$sql = "SELECT * FROM pessoas";
$resultado = $conn->query($sql);
?>

<h2>Lista de Pessoas</h2>
<a href="formulario.php">Cadastrar Nova Pessoa</a><br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th><th>Nome</th><th>Email</th><th>Idade</th><th>Cidade</th><th>Ações</th>
    </tr>
    <?php while ($pessoa = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?= $pessoa['id'] ?></td>
            <td><?= $pessoa['nome'] ?></td>
            <td><?= $pessoa['email'] ?></td>
            <td><?= $pessoa['idade'] ?></td>
            <td><?= $pessoa['cidade'] ?></td>
            <td><a href="detalhe.php?id=<?= $pessoa['id'] ?>">Ver Detalhes</a></td>
        </tr>
    <?php } ?>
</table>
