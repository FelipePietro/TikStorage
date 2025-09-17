<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'] ?? '';
    $nm_prod = $_POST['nm_prod'] ?? '';
    $qndt_prod = $_POST['qndt_prod'] ?? '';
    $desc_prod = $_POST['desc_prod'] ?? '';
    $cat_prod = $_POST['cat_prod'] ?? '';
    $loc_prod = $_POST['loc_prod'] ?? '';

    $query = "UPDATE produto 
              SET nm_prod='$nm_prod', qntd_prod='$qndt_prod', cat_prod='$cat_prod', desc_prod='$desc_prod', loc_prod='$loc_prod' 
              WHERE id='$id'";

    $result = mysqli_query($conexao, $query);

    if ($result) {
        // Exibir mensagem e redirecionar após alguns segundos
        echo "<script>
                alert('O produto foi atualizado com sucesso! Redirecionando para a Página Inicial...');
                window.location.href = 'index.php';
            </script>";
        exit;
    } else {
        echo "Erro ao atualizar: " . mysqli_error($conexao);
    }
}