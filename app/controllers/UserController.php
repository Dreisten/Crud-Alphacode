<?php
require_once '../config/database.php'; // Inclui a conexão com o banco
require_once '../app/models/User.php'; // Inclui o modelo de usuário

class UserController {
    private $userModel;

    public function __construct($pdo) {
        // Passa a conexão ao modelo
        $this->userModel = new User($pdo);
    }

    public function listUsers() {
        $users = $this->userModel->getAllUsers();
        include '../app/views/userList.php';
    }

    public function saveUser() {
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $this->userModel->addUser($name, $dob, $email, $phone);

        header('Location: /index.php?action=listUsers');
    }

    public function deleteUser($id) {
        $this->userModel->deleteUser($id);
        header('Location: /index.php?action=listUsers');
    }

    // Outros métodos, como editar usuários, etc.
}
?>
