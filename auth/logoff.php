<?php
session_start();

function logout() {
    // Destruir todas as variáveis de sessão
    session_unset();

    // Destruir a sessão
    session_destroy();

    // Redirecionar para a página de login
    header("Location: ../index.php?logout=success");
    exit();
}

logout();
