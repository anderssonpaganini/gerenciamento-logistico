<?php 
// Define o CSS específico desta página
$css_pagina = 'produtos.css';

// Inclui o cabeçalho global
include_once $_SERVER['DOCUMENT_ROOT'] . '/gerenciamento-logistico/includes/header.php'; 
?>

<!-- Cabeçalho da Seção -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">Produtos</h2>
        <p class="text-muted small mb-0">Cadastre e gerencie os itens que fazem parte da sua operação.</p>
    </div>
    <span class="badge bg-success bg-opacity-10 text-success px-3 py-2">Gestão logística</span>
</div>

<!-- Formulário de Novo Produto -->
<div class="card card-custom p-4 bg-white shadow-sm mb-5">
    <h5 class="fw-bold mb-3">Novo produto</h5>
    <p class="text-muted small">Informe o peso e as dimensões para organizar seus transportes.</p>
    
    <form action="" method="POST">
        <div class="row g-3">
            <div class="col-md-9">
                <label class="form-label small fw-bold">Nome do Produto</label>
                <input type="text" name="nome" class="form-control" placeholder="Ex.: Caixa de Eletrônicos" required>
            </div>
            <div class="col-md-3">
                <label class="form-label small fw-bold">Peso (kg)</label>
                <input type="number" step="0.01" name="peso" class="form-control" placeholder="0,00" required>
            </div>

            <div class="col-md-4">
                <label class="form-label small fw-bold">Altura (cm)</label>
                <input type="number" name="altura" class="form-control" placeholder="0" required>
            </div>
            <div class="col-md-4">
                <label class="form-label small fw-bold">Largura (cm)</label>
                <input type="number" name="largura" class="form-control" placeholder="0" required>
            </div>
            <div class="col-md-4">
                <label class="form-label small fw-bold">Comprimento (cm)</label>
                <input type="number" name="comprimento" class="form-control" placeholder="0" required>
            </div>

            <div class="col-12 d-flex justify-content-end gap-2 mt-4">
                <button type="reset" class="btn btn-outline-secondary px-4">Cancelar</button>
                <button type="submit" class="btn btn-custom-green px-4">Salvar Produto</button>
            </div>
        </div>
    </form>
</div>

<!-- Tabela de Produtos Cadastrados -->
<div class="card card-custom p-4 bg-white shadow-sm">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold mb-0">Produtos cadastrados <span class="badge bg-light text-dark border fs-6 fw-normal">4 produtos</span></h5>
        <input type="text" class="form-control w-25" placeholder="Buscar por nome ou ID...">
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light text-muted small">
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>PESO</th>
                    <th>DIMENSÕES (A × L × C)</th>
                    <th class="text-end">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-muted small">PR-001</td>
                    <td class="fw-bold">Caixa de eletrônicos</td>
                    <td>12,5 kg</td>
                    <td>48 × 30 × 50 cm</td>
                    <td class="text-end">
                        <a href="#" class="text-decoration-none text-primary me-2 small fw-bold">Editar</a>
                        <a href="#" class="text-decoration-none text-danger small fw-bold">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td class="text-muted small">PR-002</td>
                    <td class="fw-bold">Peças automotivas</td>
                    <td>28,0 kg</td>
                    <td>60 × 40 × 80 cm</td>
                    <td class="text-end">
                        <a href="#" class="text-decoration-none text-primary me-2 small fw-bold">Editar</a>
                        <a href="#" class="text-decoration-none text-danger small fw-bold">Excluir</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php 
// Inclui o rodapé global utilizando o caminho absoluto do servidor
include_once $_SERVER['DOCUMENT_ROOT'] . '/gerenciamento-logistico/includes/footer.php'; 
?>