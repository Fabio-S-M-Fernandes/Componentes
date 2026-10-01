<?php

function renderLayout($titulo, $conteudo, $passosLog, $rotaAtual) {
    $activeClientes = $rotaAtual === 'clientes' ? 'active fw-bold' : '';
    $activeRacao = $rotaAtual === 'lojaracao' ? 'active fw-bold' : '';

    echo '<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . $titulo . ' - Sistema MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f9; }
        .timeline-item { position: relative; padding-left: 20px; margin-bottom: 10px; border-left: 2px solid #0d6efd; }
        .timeline-item::before { content: ""; position: absolute; left: -6px; top: 5px; width: 10px; height: 10px; border-radius: 50%; background: #0d6efd; }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php?rota=clientes">
                <i class="bi bi-diagram-3-fill text-primary me-2"></i>Componentes <span class="badge bg-primary">MVC</span>
            </a>
            <div class="navbar-nav ms-auto gap-2">
                <a class="nav-link ' . $activeClientes . '" href="index.php?rota=clientes">
                    <i class="bi bi-people me-1"></i> Clientes
                </a>
                <a class="nav-link ' . $activeRacao . '" href="index.php?rota=lojaracao">
                    <i class="bi bi-shop me-1"></i> Loja de Ração
                </a>
            </div>
        </div>
    </nav>

    <main class="container my-4">
        <div class="row g-4">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-4">' . $titulo . '</h2>
                ' . $conteudo . '
            </div>
            <div class="col-lg-4">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-dark text-white fw-bold">
                        <i class="bi bi-cpu me-2"></i>Fluxo da Requisição (MVC)
                    </div>
                    <div class="card-body">
                        <div class="timeline">';
    foreach ($passosLog as $passo) {
        echo '<div class="timeline-item"><small class="fw-semibold text-secondary">' . $passo . '</small></div>';
    }
    echo '              </div>
                    </div>
                    <div class="card-footer bg-light text-center py-2">
                        <small class="text-muted">Rota atual: <code>/' . $rotaAtual . '</code></small>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-white border-top py-3 mt-auto text-center text-muted small">
        Sistema de Componentes MVC em PHP
    </footer>

</body>
</html>';
}