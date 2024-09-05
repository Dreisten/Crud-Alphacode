<?php
require_once 'C:\Users\Win10\Desktop\crud\config\database.php'; // Inclui a conexão com o banco
require_once 'C:\Users\Win10\Desktop\crud\app\controllers\UserController.php'; // Inclui o controlador

$controller = new UserController($pdo);

$action = $_GET['action'] ?? 'listUsers';

switch ($action) {
    case 'listUsers':
        $controller->listUsers();
        break;
    case 'saveUser':
        $controller->saveUser();
        break;
    case 'deleteUser':
        $id = $_GET['id'];
        $controller->deleteUser($id);
        break;
    default:
        $controller->listUsers();
        break;
}
?>