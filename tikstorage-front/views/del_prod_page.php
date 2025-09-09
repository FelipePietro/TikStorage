<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>TikStorage - Remover Produto</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="logo_page">Tik<span>Storage</span></div>

  <div class="container">
    <div class="logo">Remover Produto</div>
    <form method="post" action="del_prod.php">
        <input type="number" name="id" placeholder="ID do produto" required>
      <input type="submit" value="Remover Produto">
    </form>
<div>
    <button class= btn_cad onclick="window.location.href='?pagina=home'">Voltar para o Menu Principal</button>
</div>


</body>
</html>

