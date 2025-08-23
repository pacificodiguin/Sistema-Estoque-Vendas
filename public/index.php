<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: ../views/login.php");
    exit();
}

require_once "../config/db.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Sistema de Estoque</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<h1>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>

<nav>
    <a href="index.php">Dashboard</a>
    <a href="../views/produtos.php">Produtos</a>
    <a href="../views/clientes.php">Clientes</a>
    <a href="../views/vendas.php">Vendas</a>
    <a href="../controllers/logout.php">Sair</a>
</nav>

<h2>Resumo do Sistema</h2>

<?php
// Contagem de produtos
$sql = $pdo->query("SELECT COUNT(*) AS total_produtos FROM produtos");
$total_produtos = $sql->fetch(PDO::FETCH_ASSOC)['total_produtos'];

// Contagem de clientes
$sql = $pdo->query("SELECT COUNT(*) AS total_clientes FROM clientes");
$total_clientes = $sql->fetch(PDO::FETCH_ASSOC)['total_clientes'];

// Contagem de vendas
$sql = $pdo->query("SELECT COUNT(*) AS total_vendas FROM vendas");
$total_vendas = $sql->fetch(PDO::FETCH_ASSOC)['total_vendas'];
?>

<ul>
    <li>Total de produtos: <?php echo $total_produtos; ?></li>
    <li>Total de clientes: <?php echo $total_clientes; ?></li>
    <li>Total de vendas: <?php echo $total_vendas; ?></li>
</ul>

</body>
</html>
