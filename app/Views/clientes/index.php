<?= $this->extend('layout/default') ?>

<?= $this->section('conteudo') ?>

<div class="container my-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-semibold mb-0">Lista de Clientes</h3>
    <div>
      <a href="<?= base_url('clientes/criar') ?>" class="btn btn-success me-2">
        <i class="bi bi-person-plus"></i> Novo Cliente
      </a>
      <a href="<?= base_url('/') ?>" class="btn btn-secondary">
        <i class="bi bi-house"></i> Dashboard
      </a>
    </div>
  </div>

  <?php if (empty($clientes)) : ?>
    <div class="alert alert-warning text-center">
      Nenhum cliente cadastrado no momento.
    </div>
  <?php else : ?>
    <div class="table-responsive">
      <table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
          <tr>
            <th scope="col">Foto</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col" class="text-end">Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($clientes as $cliente): ?>
            <tr>
              <td>
                <?php if ($cliente['foto']) : ?>
                  <a href="<?= base_url('uploads/' . esc($cliente['foto'])) ?>" class="glightbox" data-gallery="clientes" data-title="<?= esc($cliente['nome']) ?>">
                    <img src="<?= base_url('uploads/' . esc($cliente['foto'])) ?>" class="rounded-circle" width="48" height="48" style="object-fit: cover;">
                  </a>
                <?php else : ?>
                  <div class="bg-secondary text-white rounded-circle d-inline-flex justify-content-center align-items-center" style="width: 48px; height: 48px;">
                    <i class="bi bi-person fs-5"></i>
                  </div>
                <?php endif ?>
              </td>
              <td><?= esc($cliente['nome']) ?></td>
              <td><?= esc($cliente['email']) ?></td>
              <td><?= esc(formatarTelefone($cliente['telefone'])) ?></td>
              <td class="text-end">
                <a href="<?= base_url('clientes/editar/' . $cliente['id']) ?>" class="btn btn-sm btn-outline-primary me-1">
                  <i class="bi bi-pencil"></i> Editar
                </a>
                <a onclick="showConfirm('Deseja realmente excluir este cliente?', () => { window.location.href = '<?= base_url('clientes/excluir/' . $cliente['id']) ?>'; })" class="btn btn-sm btn-outline-danger" onclick="return confirm('Deseja excluir este cliente?')">
                  <i class="bi bi-trash"></i> Excluir
                </a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  <?php endif ?>
</div>

<?= $this->endSection() ?>