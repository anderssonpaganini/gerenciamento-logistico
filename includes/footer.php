</div> <!-- Fim do container -->

    <footer class="bg-white border-top py-3 text-center text-muted small mt-auto">
        <div class="container">
            &copy; <?php echo date('Y'); ?> Sistema Logístico - UNIPAR EAD
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript Customizado -->
    <script src="/gerenciamento-logistico/js/main.js"></script>
    <?php if (isset($js_pagina)): ?>
        <script src="/gerenciamento-logistico/js/<?php echo $js_pagina; ?>"></script>
    <?php endif; ?>
</body>
</html>