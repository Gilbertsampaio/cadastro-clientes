<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Clientes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

  <h1 class="mb-4">Lista de Clientes</h1>

  <a href="/clientes/criar" class="btn btn-primary mb-3">Novo Cliente</a>

  <table class="table table-bordered table-hover">
    <thead class="table-dark">
      <tr>
        <th>Foto</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($clientes)) : ?>
        <tr><td colspan="5" class="text-center">Nenhum cliente cadastrado.</td></tr>
      <?php else : ?>
        <?php foreach ($clientes as $cliente): ?>
          <tr>
            <td>
              <?php if ($cliente['foto']): ?>
                <img src="/uploads/<?= esc($cliente['foto']) ?>" width="50">
              <?php else: ?>
                <small>Sem foto</small>
              <?php endif; ?>
            </td>
            <td><?= esc($cliente['nome']) ?></td>
            <td><?= esc($cliente['email']) ?></td>
            <td><?= esc($cliente['telefone']) ?></td>
            <td>
              <a href="/clientes/editar/<?= $cliente['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
              <a href="/clientes/excluir/<?= $cliente['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Deseja excluir?')">Excluir</a>
            </td>
          </tr>
        <?php endforeach ?>
      <?php endif ?>
    </tbody>
  </table>
</body>
</html>