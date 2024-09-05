<?php
require 'config/database.php'; // Conectando ao banco

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $datadenacimento = $_POST ['data de nascimento'];
    $celularparacontato = $_POST['celular para contato'];


    // Prepare a consulta de inserção
    $sql = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";
    $stmt = $pdo->prepare($sql);

    // Executa a inserção
    if ($stmt->execute(['nome' => $nome, 'email' => $email])) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados.";
    }
}
?>