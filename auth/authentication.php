<?php
include '../config/connection.php';

class Authentication {
    public function authenticateUser($email, $password) {
        // Conectar ao banco de dados
        $connection = new Connection();
        
        $conn = $connection->getConnection();

        // Consulta SQL para verificar se o usuário e a senha correspondem a um registro no banco de dados
        $sql = "SELECT * FROM usuario WHERE usuario='$email' AND senha='$password'";
        $result = $conn->query($sql);

        // Fechar a conexão com o banco de dados
        $connection->closeConnection();

        return $result->num_rows == 1;
    }

    public function getUserData($email) {
        // Conectar ao banco de dados
        $connection = new Connection();
        
        $conn = $connection->getConnection();
    
        // Consulta SQL para obter os dados do usuário com base no email
        $sql = "SELECT nome, perfil FROM usuario WHERE usuario='$email'";
        $result = $conn->query($sql);
    
        // Fechar a conexão com o banco de dados
        $connection->closeConnection();
    
        // Verificar se a consulta retornou algum resultado
        if ($result->num_rows == 1) {
            // Extrair os dados do usuário do resultado da consulta
            $userData = $result->fetch_assoc();
            $nomeUsuario = $userData['nome'];
            $perfilUsuario = $userData['perfil'];
    
            // Retornar os dados do usuário
            return array($nomeUsuario, $perfilUsuario);
        } else {
            // Se não houver resultados, retornar NULL ou uma indicação de erro, conforme necessário
            return null;
        }
    }    
}
