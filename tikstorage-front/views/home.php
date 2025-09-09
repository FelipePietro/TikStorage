<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TikStorage - Cadastro de Produtos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylecard.css">
</head>
<body>

<div class="logo_page">Tik<span>Storage</span></div>

<div class="text">Produtos Cadastrados</div>
    
<div class="container-cards">

    
<?php
include 'db.php'; // sua conexão com o banco

$sql = "SELECT * FROM produto";
$result = mysqli_query($conexao, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="card">';
        echo '<h9>' . $row['nm_prod'] . '</h9>';
        echo '<p>ID: ' . $row['id'] . '</p>';
        echo '</div>';
}
?>
</div>
<div class="btn_container">
    <button class= btn onclick="window.location.href='?pagina=cadastro'">Cadastrar Novo Produto</button>
    <button class= btn onclick="window.location.href='?pagina=remover'">Remover Produto</button>
</div>


</body>
</html>