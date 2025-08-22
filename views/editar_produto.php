<?php
require_once "../config/db.php";
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}

if(!isset($_GET['id'])){
    header("Location: produtos.php");
    exit();
}

$id = $_GET['id'];
$sql = $pdo->prepare("SELECT * FROM produtos WHERE id = :id");
$sql->bindValue(':id', $id);
$sql->execute();
$produto = $sql->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<h1>Editar Produto</h1>
<nav>
    <a href="../public/index.php">Dashboard</a>
    <a href="produtos.php">Produtos</a>
    <a href="../controllers/logout.php">Sair</a>
</nav>

<form method="POST" action="../controllers/produtoController.php">
    <input type="hidden" name="acao" value="atualizar">
    <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">

    <label>Nome:</label>
    <input type="text" name="nome" value="<?php echo $produto['nome']; ?>" required><br><br>

    <label>Descrição:</label>
    <textarea name="descricao" required><?php echo $produto['descricao']; ?></textarea><br><br>

    <label>Preço:</label>
    <input type="number" step="0.01" name="preco" value="<?php echo $produto['preco']; ?>" required><br><br>

    <label>Quantidade:</label>
    <input type="number" name="quantidade" value="<?php echo $produto['quantidade']; ?>" required><br><br>

    <button type="submit" class="btn">Atualizar</button>
    <a href="produtos.php" class="btn">Voltar</a>
</form>

</body>
</html>
