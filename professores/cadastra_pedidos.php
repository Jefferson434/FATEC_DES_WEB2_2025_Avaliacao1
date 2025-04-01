<?php
session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true || $_SESSION['usuario'] !== 'professor') {
    header("Location: ../index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar_pedido'])) {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $isbn = $_POST['isbn'];

    $linha = "$titulo|$autor|$editora|$isbn\n";
    file_put_contents("pedidos.txt", $linha, FILE_APPEND);
    echo "Pedido de livro cadastrado com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pedido de Livro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 600px;
            overflow-x: auto;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        label {
            font-weight: bold;
        }
        input {
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .btn:hover {
            background-color: #45a049;
        }
        a {
            text-align: center;
            display: block;
            margin-top: 10px;
            font-size: 14px;
            color: #007BFF;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastrar Pedido de Livro</h2>
        <form method="POST">
            <label for="titulo">Título do Livro: </label>
            <input type="text" name="titulo" required><br>

            <label for="autor">Autor: </label>
            <input type="text" name="autor" required><br>

            <label for="editora">Editora: </label>
            <input type="text" name="editora" required><br>

            <label for="isbn">ISBN: </label>
            <input type="text" name="isbn" required><br><br>

            <button type="submit" name="cadastrar_pedido">Cadastrar Pedido</button>
        </form>
        <br>
        <a href="../logout.php" class="btn">Sair</a>
    </div>
</body>
</html>
