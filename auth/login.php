<?php
include 'authentication.php';
session_start();

// Verificar se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Instanciar a classe Authentication
    $auth = new Authentication();

    // Chamar a função authenticateUser para verificar as credenciais
    if ($auth->authenticateUser($email, $password)) {
        // Usuário autenticado com sucesso
        $_SESSION['logged_in'] = true;
        // Obter dados do usuário e armazenar na sessão
        list($nomeUsuario, $perfilUsuario) = $auth->getUserData($email);
        $_SESSION['nome_usuario'] = $nomeUsuario;
        $_SESSION['profile'] = $perfilUsuario;
        
        header("Location: ../app/index.php?pagina=home"); // Redirecionar para a página inicial do seu sistema
    } else {
        // Credenciais inválidas, exibir mensagem de erro
        header("Location: ../index.php?msg=error");
    }
}
