<?php 
// Define o CSS específico desta página
$css_pagina = 'enderecos.css';

// Inclui o cabeçalho global utilizando o caminho absoluto do servidor
include_once $_SERVER['DOCUMENT_ROOT'] . '/gerenciamento-logistico/includes/header.php'; 
?>

<!-- Cabeçalho da Seção -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">Endereços</h2>
        <p class="text-muted small mb-0">Mantenha as origens e os destinos sempre atualizados para o transporte.</p>
    </div>
    <span class="badge bg-success bg-opacity-10 text-success px-3 py-2">Gestão logística</span>
</div>

<!-- Formulário de Novo Endereço -->
<div class="card card-custom p-4 bg-white shadow-sm mb-5">
    <h5 class="fw-bold mb-3">Novo endereço</h5>
    <p class="text-muted small">Cadastre pontos de coleta ou entrega para vincular às operações.</p>
    
    <form action="" method="POST">
        <div class="row g-3">
            <div class="col-md-4">
                <label class="form-label small fw-bold">Descrição / Apelido</label>
                <input type="text" name="descricao" class="form-control" placeholder="Ex.: Centro de Distribuição SP" required>
            </div>
            <div class="col-md-3">
                <label class="form-label small fw-bold">CEP</label>
                <input type="text" name="cep" class="form-control" placeholder="00000-000" required>
            </div>
            <div class="col-md-4">
                <label class="form-label small fw-bold">Logradouro (Rua, Av.)</label>
                <input type="text" name="logradouro" class="form-control" placeholder="Ex.: Av. Industrial" required>
            </div>
            <div class="col-md-1">
                <label class="form-label small fw-bold">Número</label>
                <input type="text" name="numero" class="form-control" placeholder="1000" required>
            </div>

            <div class="col-md-4">
                <label class="form-label small fw-bold">Bairro</label>
                <input type="text" name="bairro" class="form-control" placeholder="Ex.: Distrito Industrial" required>
            </div>
            <div class="col-md-4">
                <label class="form-label small fw-bold">Cidade</label>
                <input type="text" name="cidade" class="form-control" placeholder="Ex.: São Paulo" required>
            </div>
            <div class="col-md-4">
                <label class="form-label small fw-bold">Estado (UF)</label>
                <select name="estado" class="form-select" required>
                    <option value="">Selecione...</option>
                    <option value="SP">São Paulo (SP)</option>
                    <option value="RJ">Rio de Janeiro (RJ)</option>
                    <option value="MG">Minas Gerais (MG)</option>
                    <option value="RS">Rio Grande do Sul (RS)</option>
                    <option value="PR">Paraná (PR)</option>
                </select>
            </div>

            <div class="col-12 d-flex justify-content-end gap-2 mt-4">
                <button type="reset" class="btn btn-outline-secondary px-4">Cancelar</button>
                <button type="submit" class="btn btn-custom-green px-4">Salvar Endereço</button>
            </div>
        </div>
    </form>
</div>

<!-- Tabela de Endereços Cadastrados -->
<div class="card card-custom p-4 bg-white shadow-sm">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold mb-0">Endereços cadastrados <span class="badge bg-light text-dark border fs-6 fw-normal">3 locais</span></h5>
        <input type="text" class="form-control w-25" placeholder="Buscar endereço...">
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light text-muted small">
                <tr>
                    <th>ID</th>
                    <th>DESCRIÇÃO</th>
                    <th>ENDEREÇO</th>
                    <th>CIDADE / UF</th>
                    <th class="text-end">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-muted small">END-001</td>
                    <td class="fw-bold">Centro de Distribuição SP</td>
                    <td>Av. Industrial, 1000 - Distrito Industrial</td>
                    <td>São Paulo / SP</td>
                    <td class="text-end">
                        <a href="#" class="text-decoration-none text-primary me-2 small fw-bold">Editar</a>
                        <a href="#" class="text-decoration-none text-danger small fw-bold">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td class="text-muted small">END-002</td>
                    <td class="fw-bold">Filial Sul (Depósito)</td>
                    <td>Rua das Flores, 450 - Centro</td>
                    <td>Curitiba / PR</td>
                    <td class="text-end">
                        <a href="#" class="text-decoration-none text-primary me-2 small fw-bold">Editar</a>
                        <a href="#" class="text-decoration-none text-danger small fw-bold">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td class="text-muted small">END-003</td>
                    <td class="fw-bold">Cliente Principal (Matriz)</td>
                    <td>Rodovia BR-116, km 200</td>
                    <td>Campinas / SP</td>
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