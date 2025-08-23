<?php
require_once __DIR__ . "/../models/clienteModel.php";
$id = $_GET['id'] ?? 0;
$cliente = getClienteById($pdo, $id);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <h1>Editar Cliente</h1>
    <form action="../controllers/clienteController.php" method="POST">
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="id" value="<?= $cliente['id'] ?>">
        <label>Nome: <input type="text" name="nome" value="<?= $cliente['nome'] ?>" required></label><br>
        <label>Email: <input type="email" name="email" value="<?= $cliente['email'] ?>" required></label><br>
        <label>Telefone: <input type="text" name="telefone" value="<?= $cliente['telefone'] ?>"></label><br>
        <button type="submit">Salvar</button>
    </form>
    <a href="clientes.php">Voltar</a>
</body>
</html>
