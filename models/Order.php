<?php
require_once 'core/Database.php';

class Order {
    private $conn;
    private $table = 'orders';

    public $id;
    public $user_id;
    public $status;
    public $total_price;
    public $created_at;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAllOrders() {
        $query = 'SELECT * FROM ' . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOrderById($id) {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id = ?';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createOrder($data) {
        $query = 'INSERT INTO ' . $this->table . ' (user_id, status, total_price) VALUES (:user_id, :status, :total_price)';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $data['user_id']);
        $stmt->bindParam(':status', $data['status']);
        $stmt->bindParam(':total_price', $data['total_price']);
        if ($stmt->execute()) {
            return $this->conn->lastInsertId();
        }
        return false;
    }
}
