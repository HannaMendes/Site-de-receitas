<?php include('../includes/header.php'); ?>

<main class="formulario">
  <h2>Cadastro de Usuário</h2>
  <form action="processa_cadastro.php" method="post">
    <label for="nome">Apelido:</label>
    <input type="text" name="nome" id="nome" required>

    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" required>

    <input type="submit" value="Cadastrar">
  </form>
</main>

<?php include('../includes/footer.php'); ?>
