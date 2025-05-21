<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nm_prod = $_POST['nm_prod'] ?? '';
    $qndt_prod = $_POST['qndt_prod'] ?? '';
    $desc_prod = $_POST['desc_prod'] ?? '';
    $cat_prod = $_POST['cat_prod'] ?? '';
    $loc_prod = $_POST['loc_prod'] ?? '';

    $query = "INSERT INTO produto (nm_prod, qntd_prod, cat_prod, desc_prod, loc_prod)
              VALUES ('$nm_prod', '$qndt_prod', '$cat_prod', '$desc_prod', '$loc_prod')";

    $result = mysqli_query($conexao, $query);

    if ($result) {
        $_SESSION['msg'] = 'Produto cadastrado com sucesso!';
        header('Location: index.php?pagina=cadastro');
        exit;
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conexao);
    }
}
?>