<?php
require_once 'core/Database.php';

class CartItem {
    private $conn;
    private $table = 'cart_items';

    public $id;
    public $cart_id;
    public $product_id;
    public $quantity;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function addItemToCart($data) {
        $query = 'INSERT INTO ' . $this->table . ' (cart_id, product_id, quantity) VALUES (:cart_id, :product_id, :quantity)';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':cart_id', $data['cart_id']);
        $stmt->bindParam(':product_id', $data['product_id']);
        $stmt->bindParam(':quantity', $data['quantity']);
        return $stmt->execute();
    }

    public function getItemsByCartId($cartId) {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE cart_id = ?';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $cartId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateItemQuantity($id, $quantity) {
        $query = 'UPDATE ' . $this->table . ' SET quantity = :quantity WHERE id = :id';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function removeItemFromCart($id) {
        $query = 'DELETE FROM ' . $this->table . ' WHERE id = ?';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }
}