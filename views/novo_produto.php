<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Produto</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<h1>Novo Produto</h1>
<nav>
    <a href="../public/index.php">Dashboard</a>
    <a href="produtos.php">Produtos</a>
    <a href="../controllers/logout.php">Sair</a>
</nav>

<form method="POST" action="../controllers/produtoController.php">
    <input type="hidden" name="acao" value="cadastrar">
    <label>Nome:</label>
    <input type="text" name="nome" required><br><br>

    <label>Descrição:</label>
    <textarea name="descricao" required></textarea><br><br>

    <label>Preço:</label>
    <input type="number" step="0.01" name="preco" required><br><br>

    <label>Quantidade:</label>
    <input type="number" name="quantidade" required><br><br>

    <button type="submit" class="btn">Cadastrar</button>
    <a href="produtos.php" class="btn">Voltar</a>
</form>

</body>
</html>
