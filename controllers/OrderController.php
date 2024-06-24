<?php
require_once 'models/Order.php';

class OrderController {
    private $orderModel;

    public function __construct() {
        $this->orderModel = new Order();
    }

    public function index() {
        $orders = $this->orderModel->getAllOrders();
        require 'views/orders/index.php';
    }

    public function show($id) {
        $order = $this->orderModel->getOrderById($id);
        require 'views/orders/show.php';
    }

    public function create($data) {
        if ($this->orderModel->createOrder($data)) {
            header("Location: /orders");
        } else {
            echo "Error creating order.";
        }
    }

    public function edit($id, $data) {
        if ($this->orderModel->updateOrder($id, $data)) {
            header("Location: /orders");
        } else {
            echo "Error updating order.";
        }
    }

    public function delete($id) {
        if ($this->orderModel->deleteOrder($id)) {
            header("Location: /orders");
        } else {
            echo "Error deleting order.";
        }
    }
}