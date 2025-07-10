<?php include 'conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Agendamento</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $servico = $_POST['servico'];
  $data = $_POST['data'];
  $hora = $_POST['hora'];

  $sql = "INSERT INTO agendamentos (nome, telefone, servico, data, hora) VALUES ('$nome', '$telefone', '$servico', '$data', '$hora')";
  if ($conn->query($sql)) {
    $msg = "Olá, gostaria de confirmar meu agendamento para $data às $hora para o serviço de $servico.";
    $zap = "https://wa.me/55" . preg_replace('/\D/', '', $telefone) . "?text=" . urlencode($msg);
    echo "<div class='alert alert-success'>Agendamento realizado com sucesso!</div><a href='$zap' class='btn btn-success' target='_blank'>Confirmar via WhatsApp</a>";
  } else {
    echo "<div class='alert alert-danger'>Erro: " . $conn->error . "</div>";
  }
}
?>
<h2>Agende seu horário</h2>
<form method="POST" class="mt-3">
  <input class="form-control mb-2" type="text" name="nome" placeholder="Seu nome" required>
  <input class="form-control mb-2" type="text" name="telefone" placeholder="WhatsApp" required>
  <select class="form-select mb-2" name="servico">
    <option value="Corte Simples">Corte Simples</option>
    <option value="Barba">Barba</option>
    <option value="Corte + Barba">Corte + Barba</option>
  </select>
  <input class="form-control mb-2" type="date" name="data" required>
  <input class="form-control mb-3" type="time" name="hora" required>
  <button class="btn btn-primary" type="submit">Agendar</button>
</form>
</body>
</html>
