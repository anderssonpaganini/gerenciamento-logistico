<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gerenciamento Logístico</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Customizado -->
    <link rel="stylesheet" href="/gerenciamento-logistico/css/style.css">
    <?php if (isset($css_pagina)): ?>
        <link rel="stylesheet" href="/gerenciamento-logistico/css/<?php echo $css_pagina; ?>">
    <?php endif; ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/gerenciamento-logistico/index.php">Logística EAD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/gerenciamento-logistico/index.php">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="/gerenciamento-logistico/produtos/index.php">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="/gerenciamento-logistico/enderecos/index.php">Endereços</a></li>
                    <li class="nav-item"><a class="nav-link" href="/gerenciamento-logistico/transportadores/index.php">Transportadores</a></li>
                    <li class="nav-item"><a class="nav-link" href="/gerenciamento-logistico/fretes/index.php">Fretes</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container pb-5 flex-grow-1">