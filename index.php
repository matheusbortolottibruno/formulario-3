<?php
include "conexao.php"; 

// Consulta todos os registros da tabela
$sql = "SELECT * FROM pessoas";
$resultado = $conn->query($sql);
?>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>


<h2>ℒ𝒾𝓈𝓉𝒶 𝒹𝑒 𝒫𝑒𝓈𝓈𝑜𝒶𝓈</h2>
<a href="formulario.php">𝙲𝚊𝚍𝚊𝚜𝚝𝚛𝚊𝚛 𝙽𝚘𝚟𝚊 𝙿𝚎𝚜𝚜𝚘𝚊</a><br><br>

<table border="2" cellpadding="10">
    <tr>
        <th>ID</th><th>Nome</th><th>E-mail</th><th>Idade</th><th>Cidade</th><th>Ações</th>
    </tr>
    <?php while ($pessoa = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?= $pessoa['id'] ?></td>
            <td><?= $pessoa['nome'] ?></td>
            <td><?= $pessoa['email'] ?></td>
            <td><?= $pessoa['idade'] ?></td>
            <td><?= $pessoa['cidade'] ?></td>
            <td>
                <a href="detalhe.php?id=<?= $pessoa['id'] ?>">Ver</a> |
                <a href="editar.php?id=<?= $pessoa['id'] ?>">
                    <img src="img/editar.png" width="20" alt="Editar">
                </a> |
                <a href="excluir.php?id=<?= $pessoa['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir esta pessoa?');">
                    <img src="img/lixeira.png" width="20" alt="Excluir">
                </a>
            </td>
        </tr>
    <?php } ?>
</table>
