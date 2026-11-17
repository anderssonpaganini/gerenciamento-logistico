
<?php 
try {
    $banco = new PDO('sqlite:' . dirname(__DIR__) . '/storage/produtos.sqlite');
    $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $banco->exec(
        'CREATE TABLE IF NOT EXISTS produtos (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            nome TEXT NOT NULL,
            peso REAL NOT NULL,
            altura INTEGER NOT NULL,
            largura INTEGER NOT NULL,
            comprimento INTEGER NOT NULL,
            criado_em TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP
        )'
    );
} catch (PDOException $erro) {
    error_log($erro->getMessage());
    http_response_code(500);
    exit('Não foi possível acessar o banco de dados dos produtos.');
}

$mensagemErro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomeInformado = $_POST['nome'] ?? null;
    $pesoInformado = $_POST['peso'] ?? null;
    $alturaInformada = $_POST['altura'] ?? null;
    $larguraInformada = $_POST['largura'] ?? null;
    $comprimentoInformado = $_POST['comprimento'] ?? null;

    $nome = is_string($nomeInformado) ? trim($nomeInformado) : '';
    $peso = is_string($pesoInformado) ? filter_var($pesoInformado, FILTER_VALIDATE_FLOAT) : false;
    $altura = is_string($alturaInformada) ? filter_var($alturaInformada, FILTER_VALIDATE_INT) : false;
    $largura = is_string($larguraInformada) ? filter_var($larguraInformada, FILTER_VALIDATE_INT) : false;
    $comprimento = is_string($comprimentoInformado) ? filter_var($comprimentoInformado, FILTER_VALIDATE_INT) : false;

    if (
        $nome === '' ||
        $peso === false || $peso <= 0 ||
        $altura === false || $altura <= 0 ||
        $largura === false || $largura <= 0 ||
        $comprimento === false || $comprimento <= 0
    ) {
        $mensagemErro = 'Preencha todos os campos com valores válidos e maiores que zero.';
    } else {
        try {
            $inserir = $banco->prepare(
                'INSERT INTO produtos (nome, peso, altura, largura, comprimento)
                 VALUES (:nome, :peso, :altura, :largura, :comprimento)'
            );
            $inserir->execute([
                ':nome' => $nome,
                ':peso' => $peso,
                ':altura' => $altura,
                ':largura' => $largura,
                ':comprimento' => $comprimento,
            ]);

            header('Location: /gerenciamento-logistico/produtos/index.php?salvo=1');
            exit;
        } catch (PDOException $erro) {
            error_log($erro->getMessage());
            $mensagemErro = 'Não foi possível salvar o produto. Tente novamente.';
        }
    }
}

$produtos = $banco->query(
    'SELECT id, nome, peso, altura, largura, comprimento
     FROM produtos
     ORDER BY id DESC'
)->fetchAll(PDO::FETCH_ASSOC);

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

    <?php if (isset($_GET['salvo'])): ?>
        <div class="alert alert-success" role="alert">Produto salvo com sucesso.</div>
    <?php endif; ?>
    <?php if ($mensagemErro !== ''): ?>
        <div class="alert alert-danger" role="alert"><?php echo htmlspecialchars($mensagemErro, ENT_QUOTES, 'UTF-8'); ?></div>
    <?php endif; ?>
    
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
        <h5 class="fw-bold mb-0">Produtos cadastrados <span class="badge bg-light text-dark border fs-6 fw-normal"><?php echo count($produtos); ?> produtos</span></h5>
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
                </tr>
            </thead>
            <tbody>
                <?php if (count($produtos) === 0): ?>
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">Nenhum produto cadastrado.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($produtos as $produto): ?>
                        <tr>
                            <td class="text-muted small"><?php echo sprintf('PR-%03d', (int) $produto['id']); ?></td>
                            <td class="fw-bold"><?php echo htmlspecialchars($produto['nome'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo number_format((float) $produto['peso'], 2, ',', '.'); ?> kg</td>
                            <td><?php echo (int) $produto['altura']; ?> × <?php echo (int) $produto['largura']; ?> × <?php echo (int) $produto['comprimento']; ?> cm</td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php 
// Inclui o rodapé global utilizando o caminho absoluto do servidor
include_once $_SERVER['DOCUMENT_ROOT'] . '/gerenciamento-logistico/includes/footer.php'; 
?>