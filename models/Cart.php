<?php
require_once 'core/Database.php';

class Cart {
    private $conn;
    private $table = 'carts';

    public $id;
    public $user_id;
    public $created_at;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getCartByUserId($userId) {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE user_id = ?';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $userId);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createCart($userId) {
        $query = 'INSERT INTO ' . $this->table . ' (user_id) VALUES (:user_id)';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $userId);
        return $stmt->execute();
    }
}
