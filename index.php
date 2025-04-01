<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Seja Bem vindo!!!!</h1>


    <form action="" method="post">
        <button type="submit" name=""> Professor</button>
       
    </form>

</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'Jeff' and $_POST['password'] == '123mudar'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Jeff';
         header("location: das.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>



// if($_SERVER[$professor] == $professor && $_SERVER[$senha] == $senhaCorreta){
//     header(Location: "cadastraLivro.php");
// }


?>