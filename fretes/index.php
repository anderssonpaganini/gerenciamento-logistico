<?php 
// Define o CSS específico desta página
$css_pagina = 'fretes.css';

// Inclui o cabeçalho global utilizando o caminho absoluto do servidor
include_once $_SERVER['DOCUMENT_ROOT'] . '/gerenciamento-logistico/includes/header.php'; 
?>

<!-- Cabeçalho da Seção -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">Cálculo e Gestão de Fretes</h2>
        <p class="text-muted small mb-0">Simule rotas, vincule produtos e calcule o custo total do transporte.</p>
    </div>
    <span class="badge bg-success bg-opacity-10 text-success px-3 py-2">Módulo Principal</span>
</div>

<!-- Formulário de Novo Frete -->
<div class="card card-custom card-frete p-4 bg-white shadow-sm mb-5">
    <h5 class="fw-bold mb-3">Novo cálculo de frete</h5>
    <p class="text-muted small">Selecione a origem, o destino, o transportador e os produtos para calcular a cotação.</p>
    
    <form action="" method="POST">
        <div class="row g-3">
            <!-- Origem e Destino -->
            <div class="col-md-6">
                <label class="form-label small fw-bold">Endereço de Origem (Coleta)</label>
                <select name="origem_id" class="form-select" required>
                    <option value="">Selecione o local de origem...</option>
                    <option value="1">END-001 - Centro de Distribuição SP (São Paulo/SP)</option>
                    <option value="2">END-002 - Filial Sul (Curitiba/PR)</option>
                    <option value="3">END-003 - Cliente Principal - Matriz (Campinas/SP)</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label small fw-bold">Endereço de Destino (Entrega)</label>
                <select name="destino_id" class="form-select" required>
                    <option value="">Selecione o local de destino...</option>
                    <option value="1">END-001 - Centro de Distribuição SP (São Paulo/SP)</option>
                    <option value="2">END-002 - Filial Sul (Curitiba/PR)</option>
                    <option value="3">END-003 - Cliente Principal - Matriz (Campinas/SP)</option>
                </select>
            </div>

            <!-- Transportador -->
            <div class="col-md-6">
                <label class="form-label small fw-bold">Transportador Responsável</label>
                <select name="transportador_id" class="form-select" required>
                    <option value="">Selecione a transportadora...</option>
                    <option value="1">TR-001 - Rota Express Transportes (Caminhão Baú)</option>
                    <option value="2">TR-002 - Velox Cargas Rápidas (Van Utilitária)</option>
                    <option value="3">TR-003 - TransLogística Nacional (Carreta Sider)</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label small fw-bold">Produto Transportado</label>
                <select name="produto_id" class="form-select" required>
                    <option value="">Selecione o produto...</option>
                    <option value="1">PR-001 - Caixa de eletrônicos (12,5 kg)</option>
                    <option value="2">PR-002 - Peças automotivas (28,0 kg)</option>
                </select>
            </div>

            <!-- Valores estimados -->
            <div class="col-md-4">
                <label class="form-label small fw-bold">Distância Estimada (km)</label>
                <input type="number" name="distancia" class="form-control" placeholder="Ex.: 450" required>
            </div>
            <div class="col-md-4">
                <label class="form-label small fw-bold">Valor Base do Frete (R$)</label>
                <input type="number" step="0.01" name="valor_base" class="form-control" placeholder="0,00" required>
            </div>
            <div class="col-md-4">
                <label class="form-label small fw-bold">Prazo Estimado (Dias)</label>
                <input type="number" name="prazo" class="form-control" placeholder="Ex.: 3" required>
            </div>

            <div class="col-12 d-flex justify-content-end gap-2 mt-4">
                <button type="reset" class="btn btn-outline-secondary px-4">Limpar</button>
                <button type="submit" class="btn btn-custom-green px-4">Calcular e Salvar Frete</button>
            </div>
        </div>
    </form>
</div>

<!-- Tabela de Fretes Registrados -->
<div class="card card-custom p-4 bg-white shadow-sm">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold mb-0">Histórico de Fretes <span class="badge bg-light text-dark border fs-6 fw-normal">2 registos</span></h5>
        <input type="text" class="form-control w-25" placeholder="Filtrar fretes...">
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light text-muted small">
                <tr>
                    <th>ID</th>
                    <th>ROTA (ORIGEM → DESTINO)</th>
                    <th>TRANSPORTADOR</th>
                    <th>PRODUTO</th>
                    <th>VALOR</th>
                    <th>PRAZO</th>
                    <th class="text-end">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-muted small">FR-101</td>
                    <td>São Paulo (SP) → Curitiba (PR)</td>
                    <td class="fw-bold">Rota Express</td>
                    <td>Caixa de eletrônicos</td>
                    <td class="text-success fw-bold">R$ 1.250,00</td>
                    <td>2 dias</td>
                    <td class="text-end">
                        <a href="#" class="text-decoration-none text-primary me-2 small fw-bold">Detalhes</a>
                        <a href="#" class="text-decoration-none text-danger small fw-bold">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td class="text-muted small">FR-102</td>
                    <td>Campinas (SP) → São Paulo (SP)</td>
                    <td class="fw-bold">Velox Cargas</td>
                    <td>Peças automotivas</td>
                    <td class="text-success fw-bold">R$ 480,00</td>
                    <td>1 dia</td>
                    <td class="text-end">
                        <a href="#" class="text-decoration-none text-primary me-2 small fw-bold">Detalhes</a>
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