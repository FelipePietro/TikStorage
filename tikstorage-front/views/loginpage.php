
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>TikStorage - Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-page">
  <div class="container">
    <div class="logo">Tik<span>Storage</span></div>

    <form method="post" action="login.php">
      <input type="text" name="usuario" placeholder="Usuário" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <input type="submit" value="Entrar">
    </form>

    <div class="forgot-password">
      <a href="#">Esqueceu a senha?</a>
    </div>

    <?php if (isset($_GET['erro'])) { ?>
      <div class="alert" role="alert">
        Usuário e/ou senha inválido(s).
      </div>
 
  </div>
      </div>
</body>
</html>

<?php } ?>