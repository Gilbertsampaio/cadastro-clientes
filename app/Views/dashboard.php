<?= $this->extend('layout/default') ?>

<?= $this->section('conteudo') ?>

<div class="container my-5">
    <h3 class="mb-4 fw-semibold">Dashboard</h3>
    <div class="row g-4">

        <!-- Clientes -->
        <div class="col-sm-6 col-lg-3">
            <a href="<?= base_url('clientes') ?>" class="text-decoration-none">
                <div class="card text-bg-success h-100 shadow-sm">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                        <i class="bi bi-people-fill mb-2"></i>
                        <h5 class="card-title">Clientes</h5>
                        <p class="card-text small">Gerenciar clientes cadastrados</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Produtos -->
        <div class="col-sm-6 col-lg-3">
            <div class="card text-bg-secondary h-100 shadow-sm card-disabled">
                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                    <i class="bi bi-box-seam mb-2"></i>
                    <h5 class="card-title">Produtos</h5>
                    <p class="card-text small">Cadastro e estoque de produtos</p>
                </div>
            </div>
        </div>

        <!-- Compras -->
        <div class="col-sm-6 col-lg-3">
            <div class="card text-bg-warning h-100 shadow-sm card-disabled">
                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                    <i class="bi bi-cart-plus mb-2"></i>
                    <h5 class="card-title">Compras</h5>
                    <p class="card-text small">Registros de compras</p>
                </div>
            </div>
        </div>

        <!-- Vendas -->
        <div class="col-sm-6 col-lg-3">
            <div class="card text-bg-danger h-100 shadow-sm card-disabled">
                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                    <i class="bi bi-cash-coin mb-2"></i>
                    <h5 class="card-title">Vendas</h5>
                    <p class="card-text small">Histórico de vendas</p>
                </div>
            </div>
        </div>

        <!-- Pedidos -->
        <div class="col-sm-6 col-lg-3">
            <div class="card text-bg-info h-100 shadow-sm card-disabled">
                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                    <i class="bi bi-truck mb-2"></i>
                    <h5 class="card-title">Pedidos</h5>
                    <p class="card-text small">Histórico de pedidos</p>
                </div>
            </div>
        </div>

        <!-- Fornecedores -->
        <div class="col-sm-6 col-lg-3">
            <div class="card text-bg-primary h-100 shadow-sm card-disabled">
                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                    <i class="bi bi-truck-front mb-2"></i>
                    <h5 class="card-title">Fornecedores</h5>
                    <p class="card-text small">Histórico de fornecedores</p>
                </div>
            </div>
        </div>

        <!-- Notas Fiscais -->
        <div class="col-sm-6 col-lg-3">
            <div class="card text-bg-dark h-100 shadow-sm card-disabled">
                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                    <i class="bi bi-receipt mb-2"></i>
                    <h5 class="card-title">Notas Fiscais</h5>
                    <p class="card-text small">Segunda via de NFs</p>
                </div>
            </div>
        </div>

        <!-- Serviços -->
        <div class="col-sm-6 col-lg-3">
            <div class="card text-bg-light text-dark h-100 shadow-sm card-disabled">
                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                    <i class="bi bi-tools mb-2"></i>
                    <h5 class="card-title">Serviços</h5>
                    <p class="card-text small">Histórico de serviços</p>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>