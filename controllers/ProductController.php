<?php
require_once 'models/Product.php';

class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }

    public function index() {
        $products = $this->productModel->getAllProducts();
        require 'views/products/index.php';
    }

    public function show($id) {
        $product = $this->productModel->getProductById($id);
        require 'views/products/show.php';
    }

    public function create($data) {
        if ($this->productModel->createProduct($data)) {
            header("Location: /products");
        } else {
            echo "Error creating product.";
        }
    }

    public function edit($id, $data) {
        if ($this->productModel->updateProduct($id, $data)) {
            header("Location: /products");
        } else {
            echo "Error updating product.";
        }
    }

    public function delete($id) {
        if ($this->productModel->deleteProduct($id)) {
            header("Location: /products");
        } else {
            echo "Error deleting product.";
        }
    }
}