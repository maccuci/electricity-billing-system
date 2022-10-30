<?php
require_once "config.php";

if(isset($_POST["login"])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Insira um nome de usuário");
    }
    if (empty($password)) {
        array_push($errors, "Insira uma senha");
    }

    if(count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($connection, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            echo "Login efetuado com sucesso!";
            header("Location: http://localhost/test-php");
        } else {
            array_push($errors, "Usuário ou senha incorretos. Tente novamente.");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <form action="login.php" method="GET" class="login-form">
        <input type="text" placeholder="Usuário" />
        <input type="password" placeholder="Senha" />
        <button name="login">Entrar</button>
        <p class="message">Não possui uma conta? <a href="#">Cadastrar</a></p>
    </form>

    <script src="../js/script.js"></script>
</body>

</html>