<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

require_once __DIR__ . "/../models/clienteModel.php";
$clientes = getClientes($pdo);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <h1>Lista de Clientes</h1>
    <a href="novo_cliente.php">+ Novo Cliente</a>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th><th>Nome</th><th>Email</th><th>Telefone</th><th>Ações</th>
        </tr>
        <?php foreach ($clientes as $c): ?>
        <tr>
            <td><?= $c['id'] ?></td>
            <td><?= $c['nome'] ?></td>
            <td><?= $c['email'] ?></td>
            <td><?= $c['telefone'] ?></td>
            <td>
                <a href="editar_cliente.php?id=<?= $c['id'] ?>">Editar</a>
                <form action="../controllers/clienteController.php" method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $c['id'] ?>">
                    <input type="hidden" name="action" value="delete">
                    <button type="submit" onclick="return confirm('Excluir cliente?')">Excluir</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="../public/index.php">Voltar</a>
</body>
</html>
