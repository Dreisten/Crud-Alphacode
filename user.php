<?php

require 'C:\Users\Win10\Desktop\crud\config\database.php'; // Conectando ao banco
class User {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllUsers() {
        $stmt = $this->pdo->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function addUser($nome, $nascimento, $email, $contato) {
        $stmt = $this->pdo->prepare("INSERT INTO users (nome, nascimento, email, contato) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nome, $nascimento, $email, $contato]);
    }

    public function deleteUser($id) {
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$id]);
    }

    // Outros métodos para atualizar e buscar usuários...
}
?>