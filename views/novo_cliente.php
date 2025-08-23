<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Cliente</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <h1>Novo Cliente</h1>
    <form action="../controllers/clienteController.php" method="POST">
        <input type="hidden" name="action" value="add">
        <label>Nome: <input type="text" name="nome" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Telefone: <input type="text" name="telefone"></label><br>
        <button type="submit">Salvar</button>
    </form>
    <a href="clientes.php">Voltar</a>
</body>
</html>
