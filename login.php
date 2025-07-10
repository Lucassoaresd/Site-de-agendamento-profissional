<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user = $_POST['usuario'];
  $pass = $_POST['senha'];
  if ($user === 'admin' && $pass === '1234') {
    $_SESSION['logado'] = true;
    header('Location: painel.php');
    exit();
  } else {
    $erro = "Usuário ou senha inválidos";
  }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
  <h2 class="mb-3">Login do Administrador</h2>
  <form method="POST">
    <input class="form-control mb-2" type="text" name="usuario" placeholder="Usuário" required>
    <input class="form-control mb-3" type="password" name="senha" placeholder="Senha" required>
    <button class="btn btn-dark" type="submit">Entrar</button>
    <?php if (isset($erro)) echo "<div class='alert alert-danger mt-2'>$erro</div>"; ?>
  </form>
</body>
</html>
