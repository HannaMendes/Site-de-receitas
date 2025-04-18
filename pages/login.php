<?php include('../includes/header.php'); ?>

<main class="formulario">
  <h2>Login</h2>
  <form action="valida_login.php" method="post">
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" required>

    <input type="submit" value="Entrar">
  </form>
</main>

<?php include('../includes/footer.php'); ?>
