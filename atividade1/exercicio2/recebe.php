<?php
// GET Recebe o valor  'email' 
$email = $_GET['email'] ?? '';
// Recebe o valor do parâmetro 'senha' 
$senha = $_GET['senha'] ?? '';
?>

<!-- Exibe o email recebido -->
<p><?php echo "email: " . htmlspecialchars($email); ?></p>
<!-- Exibe a senha recebida -->
<p><?php echo "senha: " . htmlspecialchars($senha); ?></p>
