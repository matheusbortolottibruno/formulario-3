<?php
// Pega os valores enviados via POST do formulário.
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';
// POST envia.
?>

<!-- Formulário que envia dados via POST para a mesma página -->
<form method="POST" action="">
    <label for="email">Email:</label><br>
    <!-- Campo para o usuário digitar o email -->
    <input type="email" name="email" required><br><br>

    <label for="senha">Senha:</label><br>
    <!-- Campo para o usuário digitar a senha -->
    <input type="password" name="senha"><br><br>

    <button type="submit">Comfirmar</button>
</form>

<?php if ($email && $senha): ?>
    <!-- Se o email e a senha foram enviados, exibe um link -->
    <!-- O link passa email e senha como parâmetros GET na URL -->
    <a href="recebe.php?email=<?php echo urlencode($email); ?>&senha=<?php echo urlencode($senha); ?>">
      <button type="submit">Entrar</button>
    </a>
<?php endif; ?>

