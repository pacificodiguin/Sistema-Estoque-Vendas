<?php
require_once "../config/db.php";
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}

// Buscar todos os produtos
$sql = $pdo->query("SELECT * FROM produtos");
$produtos = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<h1>Produtos</h1>
<nav>
    <a href="../public/index.php">Dashboard</a>
    <a href="../views/clientes.php">Clientes</a>
    <a href="../views/vendas.php">Vendas</a>
    <a href="../controllers/logout.php">Sair</a>
</nav>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Ações</th>
    </tr>
    <?php foreach($produtos as $p): ?>
    <tr>
        <td><?php echo $p['id']; ?></td>
        <td><?php echo $p['nome']; ?></td>
        <td><?php echo $p['descricao']; ?></td>
        <td><?php echo $p['preco']; ?></td>
        <td><?php echo $p['quantidade']; ?></td>
        <td>
            <a href="editar_produto.php?id=<?php echo $p['id']; ?>" class="btn">Editar</a>
            <a href="../controllers/produtoController.php?acao=deletar&id=<?php echo $p['id']; ?>" class="btn" onclick="return confirm('Deseja realmente deletar?');">Deletar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<br>
<a href="novo_produto.php" class="btn">Cadastrar Novo Produto</a>
</body>
</html>
