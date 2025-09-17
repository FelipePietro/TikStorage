<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Preparar e executar a consulta de exclusão
    $query = "DELETE FROM produto WHERE id = '$id'";
    $result = mysqli_query($conexao, $query);

    if (!$result) {
        die("Erro ao remover o produto: " . mysqli_error($conexao));
    }
} else {
    die("ID do produto não fornecido.");
}

echo "<script>
    alert('Produto removido com sucesso! Redirecionando para a Página Inicial...');
    window.location.href = 'index.php';
</script>";

?>