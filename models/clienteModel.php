<?php
require_once __DIR__ . "/../config/db.php";

function getClientes($pdo) {
    $sql = $pdo->query("SELECT * FROM clientes ORDER BY id DESC");
    return $sql->fetchAll(PDO::FETCH_ASSOC);
}

function getClienteById($pdo, $id) {
    $sql = $pdo->prepare("SELECT * FROM clientes WHERE id = ?");
    $sql->execute([$id]);
    return $sql->fetch(PDO::FETCH_ASSOC);
}

function addCliente($pdo, $nome, $email, $telefone) {
    $sql = $pdo->prepare("INSERT INTO clientes (nome, email, telefone) VALUES (?, ?, ?)");
    return $sql->execute([$nome, $email, $telefone]);
}

function updateCliente($pdo, $id, $nome, $email, $telefone) {
    $sql = $pdo->prepare("UPDATE clientes SET nome=?, email=?, telefone=? WHERE id=?");
    return $sql->execute([$nome, $email, $telefone, $id]);
}

function deleteCliente($pdo, $id) {
    $sql = $pdo->prepare("DELETE FROM clientes WHERE id = ?");
    return $sql->execute([$id]);
}
