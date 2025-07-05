<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title><?= isset($cliente) ? 'Editar' : 'Novo' ?> Cliente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

  <h1><?= isset($cliente) ? 'Editar' : 'Cadastrar' ?> Cliente</h1>

  <?php if (session()->getFlashdata('errors')): ?>
    <div class="alert alert-danger">
      <ul>
        <?php foreach (session()->getFlashdata('errors') as $erro): ?>
          <li><?= esc($erro) ?></li>
        <?php endforeach ?>
      </ul>
    </div>
  <?php endif; ?>

  <form method="post" enctype="multipart/form-data"
        action="<?= isset($cliente) ? '/clientes/atualizar/' . $cliente['id'] : '/clientes/salvar' ?>">

    <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" name="nome" class="form-control" value="<?= old('nome', $cliente['nome'] ?? '') ?>" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">E-mail</label>
      <input type="email" name="email" class="form-control" value="<?= old('email', $cliente['email'] ?? '') ?>" required>
    </div>

    <div class="mb-3">
      <label for="telefone" class="form-label">Telefone</label>
      <input type="text" name="telefone" class="form-control" value="<?= old('telefone', $cliente['telefone'] ?? '') ?>" required>
    </div>

    <div class="mb-3">
      <label for="foto" class="form-label">Foto</label>
      <input type="file" name="foto" class="form-control" accept="image/*">
      <?php if (isset($cliente['foto']) && $cliente['foto']): ?>
        <div class="mt-2">
          <img src="/uploads/<?= esc($cliente['foto']) ?>" width="80">
        </div>
      <?php endif ?>
    </div>

    <button type="submit" class="btn btn-success"><?= isset($cliente) ? 'Atualizar' : 'Salvar' ?></button>
    <a href="/clientes" class="btn btn-secondary">Voltar</a>
  </form>
</body>
</html>