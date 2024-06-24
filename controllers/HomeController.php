<?php
require_once 'models/Product.php';

class HomeController
{
    public function index()
    {
        // Récupérer les produits populaires pour l'affichage
        $productModel = new Product();
        $products = $productModel->getAllProducts();

        // Charger la vue avec les produits
        require 'views/home/index.php';
    }
}
?>
