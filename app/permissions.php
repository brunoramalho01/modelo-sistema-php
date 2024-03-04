<?php
session_start();
function checkPermission() {
    // Verificar se a sessão está ativa
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        // Sessão não está ativa, redirecionar para a página de login
        header("Location: ../index.php?msg=error2");
        exit(); // Garantir que o script pare de ser executado após o redirecionamento
    }
}
