<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login - Sistema de Estoque</title>
</head>
<body>
  <h2>Login</h2>
  <form method="POST" action="../controllers/loginController.php">
      <label>Email:</label>
      <input type="email" name="email" required><br><br>
      
      <label>Senha:</label>
      <input type="password" name="senha" required><br><br>
      
      <button type="submit">Entrar</button>
  </form>
</body>
</html>
