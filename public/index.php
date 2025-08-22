<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: ../views/login.php");
    exit();
}

// Conexão com banco
require_once "../config/db.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Estoque e Vendas</title>
</head>
<body>
    <h1>Sistema de Estoque e Vendas - Funcionando!</h1>
    <p>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</p>
    <a href="../controllers/logout.php">Sair</a>
</body>
</html>
