<?php
session_start();

// Verifica se o usuário está logado e tem o tipo correto
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header("Location: index.php");
    exit();
}

if ($_SESSION['tipoUsuario'] === 'professor') {
    header("Location: dashboard_dos_professores.php");
    exit();
}

if ($_SESSION['tipoUsuario'] !== 'biblio') {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Bibliotecários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        h1 {
            color: #333;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            background: #007BFF;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
        ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        ul li:hover {
            background: #0056b3;
        }
        a.logout {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background: red;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a.logout:hover {
            background: darkred;
        }
    </style>
</head>
<body>
    <h1>Bem-vindo, Bibliotecário!</h1>
    <ul>
        <li><a href="bibliotecarios/cadastrar_livros.php">Cadastrar Livros</a></li>
        <li><a href="bibliotecarios/visualizar_pedidos.php">Visualizar Pedidos</a></li>
        <li><a href="ver_todosLivros.php">Visualizar Livros</a></li>
    </ul>
    <a href="logout.php" class="logout">Sair</a>
</body>
</html>
