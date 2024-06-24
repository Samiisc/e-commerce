<?php
require_once 'models/User.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function register($data) {
        if ($this->userModel->createUser($data)) {
            header("Location: /login");
        } else {
            echo "Error registering user.";
        }
    }

    public function login($data) {
        $user = $this->userModel->getUserByEmail($data['email']);
        if ($user && password_verify($data['password'], $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: /dashboard");
        } else {
            echo "Invalid credentials.";
        }
    }

    public function logout() {
        session_destroy();
        header("Location: /");
    }

    public function showProfile($id) {
        $user = $this->userModel->getUserById($id);
        require 'views/profile.php';
    }

    public function editProfile($id, $data) {
        if ($this->userModel->updateUser($id, $data)) {
            header("Location: /profile");
        } else {
            echo "Error updating profile.";
        }
    }

    public function deleteProfile($id) {
        if ($this->userModel->deleteUser($id)) {
            header("Location: /");
        } else {
            echo "Error deleting profile.";
        }
    }
}
