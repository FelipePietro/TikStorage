<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'] ?? '';
    $nm_prod = $_POST['nm_prod'] ?? '';
    $qntd_prod = $_POST['qntd_prod'] ?? '';
    $desc_prod = $_POST['desc_prod'] ?? '';
    $cat_prod = $_POST['cat_prod'] ?? '';
    $loc_prod = $_POST['loc_prod'] ?? '';

    $set_parts = [];

    if ($nm_prod !== ''){
        $set_parts[] = "nm_prod = '$nm_prod'";
    }
    if ($qntd_prod !== ''){
        $set_parts[] = "qntd_prod = '$qntd_prod'";
    }
    if ($desc_prod !== ''){
        $set_parts[] = "desc_prod = '$desc_prod'";
    }
    if ($cat_prod !== ''){
        $set_parts[] = "cat_prod = '$cat_prod'";
    }
    if ($loc_prod !== ''){
        $set_parts[] = "loc_prod = '$loc_prod'";
    }

    if (!empty($set_parts)) {
        $set_query = implode(", ", $set_parts);
        $query = "UPDATE produto SET $set_query WHERE id='$id'";


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
} else {
    echo "<script>
        alert('Nenhum campo para atualização foi adicionado! Tente Novamente');
         window.location.href = 'index.php';
    </script>";
}

}