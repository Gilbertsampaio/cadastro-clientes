<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= isset($title) ? esc($title) : 'Sistema de Gestão' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: rgb(42 66 140);
            font-size: 0.95rem;
            letter-spacing: 0.3px;
        }

        .nav-link {
            transition: color 0.2s;
            color: #fff;
            transition: all .3s ease;
        }

        .nav-link:hover {
            color: #0d6efd !important;
            transition: all .3s ease;
        }

        .text-muted:hover {
            color: #666 !important;
            transition: all .3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            transition: transform 0.2s;
            cursor: pointer;
        }

        .card i {
            font-size: 2.5rem;
        }

        .card-disabled {
            opacity: 0.5;
        }

        .glightbox-clean .gdesc-inner {
            padding: 10px !important;
        }

        .glightbox-clean .gslide-title {
            margin-bottom: 5px !important;
        }

        .glightbox-clean .gslide-image img {
            max-height: 80vh !important;
            max-width: 90vw !important;
            width: auto !important;
            object-fit: contain !important;
        }

        .animated.fadeIn {
            animation: fadeInDropdown 0.2s ease-in-out;
        }

        @keyframes fadeInDropdown {
            from {
                opacity: 0;
                transform: translateY(-5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dropdown-menu .dropdown-item:active,
        .dropdown-menu .dropdown-item:focus {
            background-color: rgb(42, 66, 140);
            color: #fff;
        }

        /* (Opcional) Para manter a cor ao passar o mouse também */
        .dropdown-menu .dropdown-item:hover,
        .dropdown-item.text-danger .dropdown-item:hover {
            background-color: rgba(42, 66, 140, 0.9);
            color: #fff !important;
        }

        #alertModal .modal-body {
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>

    <!-- NAVBAR GLOBAL -->
    <?= view('layout/navbar') ?>

    <!-- CONTE�DO PRINCIPAL -->
    <?= $this->renderSection('conteudo') ?>

    <footer class="text-center py-4 text-muted">
        &copy; <?= date('Y') ?> - Sistema de Gestão - <?= $title ?>
    </footer>

    <!-- Modal de Confirmação Genérico -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title"><i class="bi bi-exclamation-triangle"></i> Confirmar Ação</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-0" id="confirmMessage">Você tem certeza que deseja continuar?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" id="confirmOk">Sim, continuar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Alerta -->
    <div class="modal fade" id="alertModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title"><i class="bi bi-exclamation-circle"></i> Atenção</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <p id="alertMessage" class="mb-0">Mensagem de alerta genérica.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        const lightbox = GLightbox({
            selector: '.glightbox'
        });

        let confirmCallback = null;

        function showConfirm(message, callback) {
            document.getElementById('confirmMessage').innerText = message;
            const modal = new bootstrap.Modal(document.getElementById('confirmModal'));
            modal.show();

            document.getElementById('confirmOk').onclick = function() {
                modal.hide();
                if (typeof callback === 'function') callback();
            };
        }

        function showAlert(message) {
            document.getElementById('alertMessage').innerText = message;
            const alertModal = new bootstrap.Modal(document.getElementById('alertModal'));
            alertModal.show();
        }
    </script>
</body>

</html>