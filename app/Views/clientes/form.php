<?= $this->extend('layout/default') ?>

<?= $this->section('conteudo') ?>

<div class="container my-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-semibold mb-0">
      <?= isset($cliente) ? 'Editar Cliente' : 'Cadastrar Cliente' ?>
    </h3>
    <a href="<?= base_url('clientes') ?>" class="btn btn-outline-secondary">
      <i class="bi bi-arrow-left"></i> Voltar
    </a>
  </div>

  <?php if (session()->getFlashdata('errors')): ?>
    <div class="alert alert-danger">
      <h6 class="mb-2">Erros encontrados:</h6>
      <ul class="mb-0">
        <?php foreach (session()->getFlashdata('errors') as $erro): ?>
          <li><?= esc($erro) ?></li>
        <?php endforeach ?>
      </ul>
    </div>
  <?php endif; ?>

  <form method="post" enctype="multipart/form-data"
    action="<?= isset($cliente) ? base_url('/clientes/atualizar/' . $cliente['id']) : base_url('/clientes/salvar') ?>"
    class="p-4 border rounded bg-white shadow-sm">

    <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" name="nome" id="nome" class="form-control" value="<?= old('nome', $cliente['nome'] ?? '') ?>">
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">E-mail</label>
      <input type="text" name="email" id="email" class="form-control" value="<?= old('email', $cliente['email'] ?? '') ?>">
    </div>

    <div class="mb-3">
      <label for="telefone" class="form-label">Telefone</label>
      <input type="text" name="telefone" id="telefone" class="form-control" value="<?= old('telefone', $cliente['telefone'] ?? '') ?>">
    </div>

    <div class="mb-3">
      <label for="foto" class="form-label">Foto do Cliente</label>
      <input type="file" name="foto" id="foto" class="form-control" accept="image/*">
      <?php if (!empty($cliente['foto'])): ?>
        <div class="mt-3">
          <a href="<?= base_url('uploads/' . esc($cliente['foto'])) ?>" class="glightbox" data-gallery="clientes" data-title="<?= esc($cliente['nome']) ?>">
            <img src="<?= base_url('uploads/' . esc($cliente['foto'])) ?>" class="rounded shadow-sm" width="100" height="100" style="object-fit: cover;">
          </a>
        </div>
      <?php endif ?>
    </div>

    <div class="d-flex justify-content-end mt-4">
      <button type="submit" class="btn btn-success me-2">
        <i class="bi bi-check-circle"></i> <?= isset($cliente) ? 'Atualizar' : 'Salvar' ?>
      </button>
      <a href="<?= base_url('clientes') ?>" class="btn btn-outline-secondary">
        <i class="bi bi-x-circle"></i> Cancelar
      </a>
    </div>
  </form>
</div>

<script>
  $(document).ready(function() {

    $('#telefone').mask('(00) 00000-0000');

    $('.form-control').on('blur', function() {
      
      const input = $(this);
      const value = input.val().trim();
      const id = input.attr('id');
      const label = $("label[for='" + id + "']");

      let isValid = true;

      if (id === 'email') {
        isValid = value !== '' && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
      } else if (id === 'foto') {
        // Verifica se é cadastro e se o campo está vazio
        if ($('form').attr('action').includes('salvar')) {
          isValid = value !== '';
        }
      } else {
        isValid = value !== '';
      }

      if (isValid) {
        input.removeClass('is-invalid');
        label.removeClass('text-danger-label');
      }
    });

    $('form').on('submit', function(e) {
      let isValid = true;
      let nome = $('#nome').val().trim();
      let email = $('#email').val().trim();
      let telefone = $('#telefone').val().trim();
      let foto = $('#foto').val().trim();
      let msgErro = '';

      $('.form-control').removeClass('is-invalid');
      $('.form-label').removeClass('text-danger-label');

      if (nome === '') {
        $('#nome').addClass('is-invalid');
        $("label[for='nome']").addClass('text-danger-label');
        isValid = false;
        msgErro = 'Por favor, informe o Nome do cliente.';
      } else if (email === '' || !validateEmail(email)) {
        $('#email').addClass('is-invalid');
        $("label[for='email']").addClass('text-danger-label');
        isValid = false;
        msgErro = 'Por favor, informe o E-mail do cliente.';
      } else if (telefone === '') {
        $('#telefone').addClass('is-invalid');
        $("label[for='telefone']").addClass('text-danger-label');
        isValid = false;
        msgErro = 'Por favor, informe o Telefone do cliente.';
      } else if (foto === '' && $('form').attr('action').includes('salvar')) {
        $('#foto').addClass('is-invalid');
        $("label[for='foto']").addClass('text-danger-label');
        isValid = false;
        msgErro = 'Por favor, escolha a foto do cliente.';
      }

      if (!isValid) {
        showAlert(msgErro);
        e.preventDefault();
      }
    });

    function validateEmail(email) {
      const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return regex.test(email);
    }
  });
</script>
<?= $this->endSection() ?>