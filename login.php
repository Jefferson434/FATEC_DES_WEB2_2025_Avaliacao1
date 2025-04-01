<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    session_start();

    $credenciais = [
        "biblio" => "biblio",
        "professor" => "professor"
    ];

    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';
    $tipoUsuario = $_POST['usuarioTipo'] ?? '';

    if (isset($credenciais[$usuario]) && $credenciais[$usuario] === $senha) {
        $_SESSION['logado'] = true;
        $_SESSION['usuario'] = $usuario;
        $_SESSION['tipoUsuario'] = $tipoUsuario;

        if ($tipoUsuario === "biblio") {
            header("Location: dashboard_dos_bibliotecarios.php");
        } else {
            header("Location: dashboard_dos_professores.php");
        }
        exit();
    } else {
        $_SESSION['logado'] = false;
        $_SESSION['erro_login'] = "Usuário ou senha incorretos.";
        header("Location: index.php");
        exit();
    }
}
