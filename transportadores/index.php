<?php 
// Define o CSS específico desta página
$css_pagina = 'transportadores.css';

// Inclui o cabeçalho global utilizando o caminho absoluto do servidor
include_once $_SERVER['DOCUMENT_ROOT'] . '/gerenciamento-logistico/includes/header.php'; 
?>

<!-- Cabeçalho da Seção -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">Transportadores</h2>
        <p class="text-muted small mb-0">Gerencie as empresas e os motoristas responsáveis pelas entregas.</p>
    </div>
    <span class="badge bg-success bg-opacity-10 text-success px-3 py-2">Gestão logística</span>
</div>

<!-- Formulário de Novo Transportador -->
<div class="card card-custom p-4 bg-white shadow-sm mb-5">
    <h5 class="fw-bold mb-3">Novo transportador</h5>
    <p class="text-muted small">Cadastre os dados da empresa parceira ou motorista autônomo.</p>
    
    <form action="" method="POST">
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label small fw-bold">Nome / Razão Social</label>
                <input type="text" name="nome" class="form-control" placeholder="Ex.: Rota Express Transportes" required>
            </div>
            <div class="col-md-3">
                <label class="form-label small fw-bold">CNPJ / CPF</label>
                <input type="text" name="documento" class="form-control" placeholder="00.000.000/0001-00" required>
            </div>
            <div class="col-md-3">
                <label class="form-label small fw-bold">Telefone de Contato</label>
                <input type="text" name="telefone" class="form-control" placeholder="(00) 00000-0000" required>
            </div>

            <div class="col-md-6">
                <label class="form-label small fw-bold">E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="contato@transportadora.com" required>
            </div>
            <div class="col-md-6">
                <label class="form-label small fw-bold">Tipo de Frota / Veículo Principal</label>
                <input type="text" name="veiculo" class="form-control" placeholder="Ex.: Caminhão Baú / Van utilitária" required>
            </div>

            <div class="col-12 d-flex justify-content-end gap-2 mt-4">
                <button type="reset" class="btn btn-outline-secondary px-4">Cancelar</button>
                <button type="submit" class="btn btn-custom-green px-4">Salvar Transportador</button>
            </div>
        </div>
    </form>
</div>

<!-- Tabela de Transportadores Cadastrados -->
<div class="card card-custom p-4 bg-white shadow-sm">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold mb-0">Transportadores ativos <span class="badge bg-light text-dark border fs-6 fw-normal">3 parceiros</span></h5>
        <input type="text" class="form-control w-25" placeholder="Buscar transportador...">
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light text-muted small">
                <tr>
                    <th>ID</th>
                    <th>NOME / RAZÃO SOCIAL</th>
                    <th>DOCUMENTO</th>
                    <th>CONTATO</th>
                    <th>VEÍCULO PRINCIPAL</th>
                    <th class="text-end">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-muted small">TR-001</td>
                    <td class="fw-bold">Rota Express Transportes</td>
                    <td>12.345.678/0001-90</td>
                    <td>(11) 98765-4321</td>
                    <td>Caminhão Baú (3 eixos)</td>
                    <td class="text-end">
                        <a href="#" class="text-decoration-none text-primary me-2 small fw-bold">Editar</a>
                        <a href="#" class="text-decoration-none text-danger small fw-bold">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td class="text-muted small">TR-002</td>
                    <td class="fw-bold">Velox Cargas Rápidas</td>
                    <td>98.765.432/0001-12</td>
                    <td>(41) 99123-4567</td>
                    <td>Van Utilitária</td>
                    <td class="text-end">
                        <a href="#" class="text-decoration-none text-primary me-2 small fw-bold">Editar</a>
                        <a href="#" class="text-decoration-none text-danger small fw-bold">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td class="text-muted small">TR-003</td>
                    <td class="fw-bold">TransLogística Nacional</td>
                    <td>45.123.789/0001-55</td>
                    <td>(19) 97788-9900</td>
                    <td>Carreta Sider</td>
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