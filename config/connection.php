<?php

class Connection {
    private $servername = "localhost"; // nome do Host ou IP do servidor de
    private $username = "root"; // usuario do banco de dados
    private $password = "root"; // senha do banco de dados
    private $dbname = "systemsrv"; //  Nome do Banco de Dados
    private $conn;

    public function __construct() {
        date_default_timezone_set('America/Manaus');
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Conexão falhou: " . $this->conn->connect_error);
        }
    }    

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
?>
