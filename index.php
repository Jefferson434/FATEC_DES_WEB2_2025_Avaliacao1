<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema de Biblioteca</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        form {
            display: inline-block;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin: 10px 0;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            margin-top: 15px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Seja Bem-vindo!</h1>
    
    <form action="login.php" method="post">
        <label>
            <input type="radio" name="usuarioTipo" value="biblio" checked>
            Bibliotecário
        </label>
        
        <label>
            <input type="radio" name="usuarioTipo" value="professor">
            Professor
        </label>
        
        <label for="usuario">Informe seu usuário:</label>
        <input type="text" name="usuario" id="usuario" required>
        
        <label for="senha">Digite a senha:</label>
        <input type="password" name="senha" id="senha" required>
        
        <input type="submit" value="Entrar">
    </form>
</body>
</html>
