<?php 
// Inclui o cabeçalho global com o menu de navegação
include_once 'includes/header.php'; 
?>

<!-- Seção de Boas-Vindas -->
<div class="text-center py-4 my-2">
    <h1 class="fw-bold fs-2">Bem-vindo ao Sistema de Gerenciamento Logístico</h1>
    <p class="text-muted">Tudo o que você precisa para manter sua operação em movimento.</p>
</div>

<!-- Cards de Estatísticas -->
<div class="row g-4 mb-5">
    <div class="col-md-4">
        <div class="card card-custom p-3 bg-white shadow-sm">
            <div class="card-body">
                <h6 class="card-subtitle text-muted mb-2">Total de Produtos Cadastrados</h6>
                <h2 class="fw-bold mb-1">128</h2>
                <small class="text-muted">Itens prontos para o transporte</small>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-custom p-3 bg-white shadow-sm">
            <div class="card-body">
                <h6 class="card-subtitle text-muted mb-2">Transportadores Ativos</h6>
                <h2 class="fw-bold mb-1">24</h2>
                <small class="text-muted">Parceiros conectados à sua operação</small>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-custom p-3 bg-white shadow-sm">
            <div class="card-body">
                <h6 class="card-subtitle text-muted mb-2">Fretes do Dia</h6>
                <h2 class="fw-bold mb-1">18</h2>
                <small class="text-muted">12 concluídos • 6 em andamento</small>
            </div>
        </div>
    </div>
</div>

<!-- Atalhos Rápidos -->
<h5 class="fw-bold mb-3">Sua operação, em um só lugar</h5>
<div class="row g-3 mb-5">
    <div class="col-md-3">
        <div class="card card-custom p-3 bg-white h-100 shadow-sm">
            <h6 class="fw-bold text-muted small">01</h6>
            <h5 class="fw-bold">Produtos</h5>
            <p class="text-muted small">Cadastre e organize os itens que serão transportados.</p>
            <a href="produtos/index.php" class="text-decoration-none fw-bold text-custom-green mt-auto">Gerenciar produtos &rarr;</a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-custom p-3 bg-white h-100 shadow-sm">
            <h6 class="fw-bold text-muted small">02</h6>
            <h5 class="fw-bold">Endereços</h5>
            <p class="text-muted small">Mantenha as origens e os destinos sempre atualizados.</p>
            <a href="enderecos/index.php" class="text-decoration-none fw-bold text-custom-green mt-auto">Gerenciar endereços &rarr;</a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-custom p-3 bg-white h-100 shadow-sm">
            <h6 class="fw-bold text-muted small">03</h6>
            <h5 class="fw-bold">Transportadores</h5>
            <p class="text-muted small">Gerencie os responsáveis pelas suas entregas.</p>
            <a href="transportadores/index.php" class="text-decoration-none fw-bold text-custom-green mt-auto">Gerenciar transportadores &rarr;</a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-custom p-3 bg-custom-dark text-white h-100 shadow-sm">
            <h6 class="fw-bold text-secondary small">04</h6>
            <h5 class="fw-bold">Fretes</h5>
            <p class="text-secondary small">Acompanhe os envios e planeje novas entregas.</p>
            <a href="fretes/index.php" class="text-decoration-none fw-bold text-success mt-auto">Consultar fretes &rarr;</a>
        </div>
    </div>
</div>

<?php 
// Inclui o rodapé global
include_once 'includes/footer.php'; 
?>