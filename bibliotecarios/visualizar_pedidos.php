<?php
session_start();

// Verifica se o bibliotecário está logado
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true || $_SESSION['usuario'] !== 'biblio') {
    header("Location: ../index.php");
    exit();
}


$pedidos = [];
if (file_exists('../professores/pedidos.txt')) {
    $pedidos = file('../professores/pedidos.txt', FILE_IGNORE_NEW_LINES);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Pedidos de Livros</title>
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
            width: 800px;
            overflow-x: auto;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
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
        <h2>Livros Pedidos</h2>

        <?php if (empty($pedidos)) : ?>
            <p>Nenhum pedido de livro foi realizado ainda.</p>
        <?php else : ?>
            <table>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Editora</th>
                        <th>ISBN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pedidos as $pedido) : ?>
                        <?php list($titulo, $autor, $editora, $isbn) = explode('|', $pedido); ?>
                        <tr>
                            <td><?php echo htmlspecialchars($titulo); ?></td>
                            <td><?php echo htmlspecialchars($autor); ?></td>
                            <td><?php echo htmlspecialchars($editora); ?></td>
                            <td><?php echo htmlspecialchars($isbn); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>

        <a href="../logout.php" class="btn">Sair</a>
    </div>
</body>
</html>
