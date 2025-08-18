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
        // Exibir mensagem e redirecionar após alguns segundos
        echo "
        <html lang='pt-br'>
        <head>
            <meta charset='UTF-8'>
            <title>Cadastro</title>
            <script>
                setTimeout(function() {
                    window.location.href = 'index.php?pagina=tabela';
                }, 3000); // 3 segundos
            </script>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    text-align: center;
                    margin-top: 100px;
                }
                .msg {
                    padding: 15px;
                    background: #d4edda;
                    border: 1px solid #c3e6cb;
                    color: #155724;
                    display: inline-block;
                    border-radius: 8px;
                }
            </style>
        </head>
        <body>
            <div class='msg'>✅ Produto cadastrado com sucesso!<br>
            Você será redirecionado em 3 segundos...</div>
        </body>
        </html>
        ";
        exit;
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conexao);
    }
}
?>