<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livro</title>
</head>
<body>

    <form action="<?php $_SERVER["PHP_SELF"]?>" method="POST" >
        <label for="text">Digite o titulo do livro:
            <input type="text" name="livro"><br>
        </label>
        <label for="text">Digite o nome do autor:
            <input type="text" name="autor"><br>
        </label>
        <label for="text">Digite o nome da editora;
            <input type="text" name="editora"><br>
        </label>
        <label for="text">Digite o isbn:
            <input type="text" name="isbn"><br>
        </label>
        <button type="submit"> Enviar </button>
    </form>


</body>
</html>