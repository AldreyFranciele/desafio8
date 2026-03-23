<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style>
    body {
      background: #f161d2;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-container {
      background: #63f7ca;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 300px;
    }
    h2 {
      text-align: center;
    }
    label {
      display: block;
      margin-top: 15px;
    }
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #1db2df;
      border-radius: 5px;
    }
    .checkbox {
      margin-top: 15px;
    }
    input[type="submit"] {
      margin-top: 20px;
      width: 100%;
      padding: 10px;
      background: #007BFF;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }
    .msg {
      color: red;
      text-align: center;
      margin-top: 10px;
    }
  </style>
</head>
<body>


<div class="login-container">
  <h2>Login</h2>


  <?php if (isset($_SESSION['erro'])): ?>
    <div class="msg"><?= $_SESSION['erro']; unset($_SESSION['erro']); ?></div>
  <?php endif; ?>


  <form action="validar.php" method="post">
    <label>Usuário:</label>
    <input type="text" name="usuario" value="<?= $_COOKIE['usuario'] ?? '' ?>" required>


    <label>Senha:</label>
    <input type="password" name="senha" required>


    <div class="checkbox">
      <label><input type="checkbox" name="lembrar" <?= isset($_COOKIE['usuario']) ? 'checked' : '' ?>> Lembrar-me</label>
    </div>


    <input type="submit" value="Entrar">
  </form>
</div>


</body>
</html>
