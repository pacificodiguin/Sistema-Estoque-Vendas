<?php
require_once "../config/db.php";

// Inserir produto
if(isset($_POST['acao']) && $_POST['acao'] == "cadastrar"){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    $sql = $pdo->prepare("INSERT INTO produtos (nome, descricao, preco, quantidade) VALUES (:nome, :descricao, :preco, :quantidade)");
    $sql->execute([
        ':nome' => $nome,
        ':descricao' => $descricao,
        ':preco' => $preco,
        ':quantidade' => $quantidade
    ]);

    header("Location: ../views/produtos.php");
}

// Deletar produto
if(isset($_GET['acao']) && $_GET['acao'] == "deletar"){
    $id = $_GET['id'];
    $sql = $pdo->prepare("DELETE FROM produtos WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
    header("Location: ../views/produtos.php");
}

// Buscar produto para editar
if(isset($_GET['acao']) && $_GET['acao'] == "editar"){
    $id = $_GET['id'];
    $sql = $pdo->prepare("SELECT * FROM produtos WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
    $produto = $sql->fetch(PDO::FETCH_ASSOC);
}

// Atualizar produto
if(isset($_POST['acao']) && $_POST['acao'] == "atualizar"){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    $sql = $pdo->prepare("UPDATE produtos SET nome=:nome, descricao=:descricao, preco=:preco, quantidade=:quantidade WHERE id=:id");
    $sql->execute([
        ':nome' => $nome,
        ':descricao' => $descricao,
        ':preco' => $preco,
        ':quantidade' => $quantidade,
        ':id' => $id
    ]);

    header("Location: ../views/produtos.php");
}
