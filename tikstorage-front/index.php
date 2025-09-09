<?php 
# Iniciar sessão
session_start();

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Verifica se está logado
if (isset($_SESSION['login'])) {
    // Verifica qual página será carregada
    $pagina = $_GET['pagina'] ?? 'teste';

    switch ($pagina) {
        case 'cadastro': 
            include 'views/add_prod_page.php'; 
            break;
        case 'remover':
            include 'views/del_prod_page.php';
            break;
        // Adicione outras páginas seguras aqui
        default: 
            include 'views/home.php'; 
            break;
    }
} else {
    // Usuário não logado, mostra tela de login
    include 'views/loginpage.php';
}

# Rodapé
include 'footer.php';
