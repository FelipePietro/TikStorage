<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>TikStorage - Cadastro de Produtos</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="logo_page">Tik<span>Storage</span></div>

  <div class="container">
    <div class="logo">Cadastro de Produtos</div>
    <form method="post" action="produtos.php">
      <input type="text" name="nm_prod" placeholder="Nome do produto" required>
        <input type="number" name="qndt_prod" placeholder="Quantidade" required>
        <input type="text" name="desc_prod" placeholder="Descrição do produto" required>
        <input type="text" name="cat_prod" placeholder="Categoria do produto" required>
        <input type="text" name="loc_prod" placeholder="Localização do produto" required>
      <input type="submit" value="Cadastrar Produto">
    </form>
<div>
    <button class= btn_cad onclick="window.location.href='?pagina=home'">Voltar para o Menu Principal</button>
</div>


</body>
</html>

