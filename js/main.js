// Funções dinâmicas de interface e validação
document.addEventListener('DOMContentLoaded', () => {
    console.log('Sistema de Gerenciamento Logístico carregado com sucesso.');

    // Exemplo de confirmação dinâmica para exclusões
    const deleteButtons = document.querySelectorAll('.btn-delete');
    deleteButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            if (!confirm('Tem a certeza que deseja eliminar este registo?')) {
                event.preventDefault();
            }
        });
    });
});