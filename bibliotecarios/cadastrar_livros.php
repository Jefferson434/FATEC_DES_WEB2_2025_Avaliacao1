<?php
session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true || $_SESSION['usuario'] !== 'biblio') {
    header("Location: ../index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar_livro'])) {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $isbn = $_POST['isbn'];

    $linha = "$titulo|$autor|$editora|$isbn\n";
    file_put_contents("livros.txt", $linha, FILE_APPEND);
    echo "<p class='sucesso'>Livro cadastrado com sucesso!</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livro</title>
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
            width: 400px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-size: 14px;
            margin-bottom: 5px;
            color: #555;
        }
        input {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .sucesso {
            color: green;
            font-size: 16px;
            text-align: center;
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
        <h2>Cadastrar Livro</h2>
        <form method="POST">
            <label for="titulo">Título do Livro: </label>
            <input type="text" name="titulo" required>

            <label for="autor">Autor: </label>
            <input type="text" name="autor" required>

            <label for="editora">Editora: </label>
            <input type="text" name="editora" required>

            <label for="isbn">ISBN: </label>
            <input type="text" name="isbn" required>

            <button type="submit" name="cadastrar_livro">Cadastrar Livro</button>
        </form>
        <br>
        <a href="../logout.php">Sair</a>
    </div>
</body>
</html>
