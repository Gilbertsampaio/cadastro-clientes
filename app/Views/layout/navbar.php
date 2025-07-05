<div class="bg-light border-bottom small">
    <div class="container-fluid d-flex flex-wrap">
        <a href="#" class="px-3 py-2 text-decoration-none border-end text-dark fw-semibold">Conheça-nos</a>
        <a href="#" class="px-3 py-2 text-decoration-none border-end text-dark fw-semibold">Visão</a>
        <a href="#" class="px-3 py-2 text-decoration-none border-end text-dark fw-semibold">Missão</a>
        <a href="#" class="px-3 py-2 text-decoration-none border-end text-dark fw-semibold">Valores</a>
        <a href="#" class="px-3 py-2 text-decoration-none text-dark fw-semibold">Contato</a>
    </div>
</div>

<!-- Segunda linha com navbar principal -->
<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container-fluid px-4">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" width="40" height="40" class="me-2">
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu central -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarMain">
            <ul class="navbar-nav gap-3">
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="<?= base_url('clientes') ?>">Clientes</a>
                </li>
                <li class="nav-item">
                    <span class="nav-link fw-semibold text-muted">Produtos</span>
                </li>
                <li class="nav-item">
                    <span class="nav-link fw-semibold text-muted">Compras</span>
                </li>
                <li class="nav-item">
                    <span class="nav-link fw-semibold text-muted">Vendas</span>
                </li>
                <li class="nav-item">
                    <span class="nav-link fw-semibold text-muted">Pedidos</span>
                </li>
                <li class="nav-item">
                    <span class="nav-link fw-semibold text-muted">Fornecedores</span>
                </li>
                <li class="nav-item">
                    <span class="nav-link fw-semibold text-muted">Notas Fiscais</span>
                </li>
                <li class="nav-item">
                    <span class="nav-link fw-semibold text-muted">Serviços</span>
                </li>
            </ul>
        </div>

        <!-- Usu�rio logado -->
        <div class="d-flex align-items-center gap-3">
            <!-- Busca -->
            <a href="#" class="text-white"><i class="bi bi-search fs-5"></i></a>

            <!-- Dropdown do Usuário -->
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?= base_url('assets/img/usuario.jpg') ?>" alt="Foto de perfil" width="36" height="36" class="rounded-circle me-2 shadow-sm">
                    <div class="d-none d-sm-block">
                        <strong>Gilbert Sampaio</strong>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow animated fadeIn" aria-labelledby="userDropdown" style="min-width: 220px;">
                    <li class="px-3 py-2">
                        <small class="text-muted">Bem-vindo</small><br>
                        <span class="fw-semibold">Gilbert Sampaio</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> Meus Dados</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-bar-chart-line me-2"></i> Minhas Vendas</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-box-seam me-2"></i> Meus Pedidos</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i> Preferências</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-box-arrow-right me-2"></i> Sair</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>