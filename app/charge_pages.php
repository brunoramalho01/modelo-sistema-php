<?php
/**
 * Funcção criada para puxar dinamicamente as paginas do um Web App.
 */
function carregarPagina($nomePagina) {
    // Caminho do arquivo da página
    $caminhoPagina = "pages/{$nomePagina}.php";

    // Verifica se o arquivo da página existe
    if(file_exists($caminhoPagina)) {
        // A página existe, então inclui ela
        include_once $caminhoPagina;
    } else {
        // A página não existe, exibe a página de erro 404
        include_once 'pages/404.php';
    }
}