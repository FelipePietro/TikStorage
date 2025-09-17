<?php

include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>TikStorage - Atualizar Produto</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="logo_page">Tik<span>Storage</span></div>

  <div class="container">
    <div class="logo">Atualizar Produtos</div>
    <form method="post" action="upd_prod.php?id=<?php echo $id; ?>">
      <input type="text" name="nm_prod" placeholder="Nome do produto" required>
        <input type="number" name="qndt_prod" placeholder="Quantidade" required>
        <input type="text" name="desc_prod" placeholder="Descrição do produto" required>
        <input type="text" name="cat_prod" placeholder="Categoria do produto" required>
        <input type="text" name="loc_prod" placeholder="Localização do produto" required>
      <input type="submit" value="Atualizar Produto">
    </form>
<div>
    <button class= btn_card onclick="window.location.href='?pagina=home'">Voltar para o Menu Principal</button>
</div>


</body>
</html>

