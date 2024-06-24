<?php
require_once 'models/Cart.php';
require_once 'models/CartItem.php';

class CartController {
    private $cartModel;
    private $cartItemModel;

    public function __construct() {
        $this->cartModel = new Cart();
        $this->cartItemModel = new CartItem();
    }

    public function showCart($userId) {
        $cart = $this->cartModel->getCartByUserId($userId);
        $cartItems = $this->cartItemModel->getItemsByCartId($cart['id']);
        require 'views/cart/show.php';
    }

    public function addItem($data) {
        if ($this->cartItemModel->addItemToCart($data)) {
            header("Location: /cart");
        } else {
            echo "Error adding item to cart.";
        }
    }

    public function updateItem($id, $quantity) {
        if ($this->cartItemModel->updateItemQuantity($id, $quantity)) {
            header("Location: /cart");
        } else {
            echo "Error updating item quantity.";
        }
    }

    public function removeItem($id) {
        if ($this->cartItemModel->removeItemFromCart($id)) {
            header("Location: /cart");
        } else {
            echo "Error removing item from cart.";
        }
    }
}