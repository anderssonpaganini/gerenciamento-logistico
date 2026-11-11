<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rota | Sistema de Gerenciamento Logístico</title>
    <!-- Bootstrap 5 CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS Global do Sistema (Caminho absoluto a partir do htdocs) -->
    <link rel="stylesheet" href="/gerenciamento-logistico/assets/css/style.css">

    <?php 
    // Carrega o CSS específico da página se a variável $css_pagina for definida
    if (isset($css_pagina) && !empty($css_pagina)) {
        echo '<link rel="stylesheet" href="/gerenciamento-logistico/assets/css/' . $css_pagina . '">';
    }
    ?>
</head>
<body class="bg-light text-dark">

    <!-- Barra de Navegação Superior -->
    <nav class="navbar navbar-expand-lg navbar-dark px-4 py-3 mb-4" style="background-color: #0b1311 !important;">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-white fs-4" href="/gerenciamento-logistico/index.php">
                rota <span class="fs-6 text-secondary fw-normal">/ logística</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link px-3" href="/gerenciamento-logistico/index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="/gerenciamento-logistico/produtos/index.php">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="/gerenciamento-logistico/enderecos/index.php">Endereços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="/gerenciamento-logistico/transportadores/index.php">Transportadores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="/gerenciamento-logistico/fretes/index.php">Fretes</a>
                    </li>
                </ul>
                <span class="navbar-text text-secondary small">Área administrativa</span>
            </div>
        </div>
    </nav>

    <!-- Container Principal -->
    <div class="container pb-5">