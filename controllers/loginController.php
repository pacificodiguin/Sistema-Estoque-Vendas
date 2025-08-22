<?php
require_once "../config/db.php";

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

$sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
$sql->bindValue(":email", $email);
$sql->execute();

$user = $sql->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($senha, $user['senha'])) {
    session_start();
    $_SESSION['usuario'] = $user['nome'];
    header("Location: ../public/index.php");
} else {
    echo "Usuário ou senha inválidos!";
}
