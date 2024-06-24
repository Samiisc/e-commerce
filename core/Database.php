<?php
class Database {
    private string $host = 'localhost';
    private string $db_name = 'ecommerce';
    private string $username = 'root';
    private string $password = '';
    public $conn;

    public function getConnection(): ?PDO
    {
        $this->conn = null;
        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->conn->exec('set names utf8');
            echo 'Connected to database successfully';
        } catch(PDOException $exception) {
            echo 'Connection error: ' . $exception->getMessage();
        }
        return $this->conn;
    }
}
