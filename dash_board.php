<?php
 session_start();

 if ($_SESSION['usuario'] == 'bibliotecario') {
    echo "<a href= 'livro.php'>Cadastrar Livros</a><br>";
    echo "<a href= 'visu_pedidos.php'>Visualizar Pedidos";
 } else {
    echo "<a href= 'pedido.php'>cadastrar Pedidos";
 }

 echo "<a href= 'visu_pedidos.php'>Visualizar livros";
 echo "<a href= 'logout.php'>Logout </a>";