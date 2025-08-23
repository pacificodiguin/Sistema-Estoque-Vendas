<?php
require_once __DIR__ . "/../models/clienteModel.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'add') {
        addCliente($pdo, $_POST['nome'], $_POST['email'], $_POST['telefone']);
        header("Location: ../views/clientes.php");
        exit;
    }

    if ($action === 'edit') {
        updateCliente($pdo, $_POST['id'], $_POST['nome'], $_POST['email'], $_POST['telefone']);
        header("Location: ../views/clientes.php");
        exit;
    }

    if ($action === 'delete') {
        deleteCliente($pdo, $_POST['id']);
        header("Location: ../views/clientes.php");
        exit;
    }
}
