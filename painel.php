<?php
session_start();
if (!isset($_SESSION['logado'])) {
  header('Location: login.php');
  exit();
}
include 'conexao.php';
$result = $conn->query("SELECT * FROM agendamentos ORDER BY data, hora");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Painel Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
  <h2 class="mb-3">Agendamentos</h2>
  <a href="logout.php" class="btn btn-secondary mb-3">Sair</a>
  <table class="table table-bordered">
    <thead><tr><th>Nome</th><th>Telefone</th><th>Serviço</th><th>Data</th><th>Hora</th></tr></thead>
    <tbody>
    <?php while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $row['nome'] ?></td>
        <td><?= $row['telefone'] ?></td>
        <td><?= $row['servico'] ?></td>
        <td><?= $row['data'] ?></td>
        <td><?= $row['hora'] ?></td>
      </tr>
    <?php endwhile; ?>
    </tbody>
  </table>
</body>
</html>
