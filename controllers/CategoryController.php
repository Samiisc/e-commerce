<?php
require_once 'models/Category.php';

class CategoryController {
    private $categoryModel;

    public function __construct() {
        $this->categoryModel = new Category();
    }

    public function index() {
        $categories = $this->categoryModel->getAllCategories();
        require 'views/categories/index.php';
    }

    public function show($id) {
        $category = $this->categoryModel->getCategoryById($id);
        require 'views/categories/show.php';
    }

    public function create($data) {
        if ($this->categoryModel->createCategory($data)) {
            header("Location: /categories");
        } else {
            echo "Error creating category.";
        }
    }

    public function edit($id, $data) {
        if ($this->categoryModel->updateCategory($id, $data)) {
            header("Location: /categories");
        } else {
            echo "Error updating category.";
        }
    }

    public function delete($id) {
        if ($this->categoryModel->deleteCategory($id)) {
            header("Location: /categories");
        } else {
            echo "Error deleting category.";
        }
    }
}