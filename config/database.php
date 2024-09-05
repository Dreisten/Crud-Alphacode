<?php
$host = 'localhost';    // Endereço do servidor MySQL
$db   = 'formularioalphacode'; // Nome do banco de dados
$user = 'root';   // Usuário do MySQL
$pass = 'Andrei';     // Senha do MySQL

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4"; // Corrigido para o formato correto

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    exit;
}
?>