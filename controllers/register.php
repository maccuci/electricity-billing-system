<?php
require_once "config.php";

$username = "";
$email = "";
$address = "";
$cep = "";
$password = "";
$errors = array();

if (isset($_POST["register"])) {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $cep = mysqli_real_escape_string($connection, $_POST['cep']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($connection, $_POST['confirm-password']);

    if (empty($username))
        array_push($errors, "Insira um nome de usuário.");
    if (empty($email))
        array_push($errors, "Insira um email.");
    if (empty($address))
        array_push($errors, "Insira um endereço.");
    if (empty($cep))
        array_push($errors, "Insira um cep.");
    if (empty($password))
        array_push($errors, "Insira uma senha.");
    if ($confirm_password != $password)
        array_push($errors, "Ambas as senhas não coincidem");

    $query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['username'] == $username) {

            array_push($errors, "Este nome de usuário já existe!");
        }

        if ($user['email'] == $email) {
            array_push($errors, "Este endereço de email já existe!");
        }
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "INSERT INTO users (username, email, address, cep, password)
                    VALUES ('$username', '$email', '$address', '$cep', '$password');";
        mysqli_query($connection, $query);
        header("Location: http://localhost/test-php");
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

    <form action="./controllers/register.php" method="POST" class="register-form">
        <input type="text" name="username" id="username" placeholder="Nome de usuário" />
        <input type="password" name="password" id="password" placeholder="Senha" />
        <input type="password" name="confirm-password" id="confirm-password" placeholder="Repetir senha" />
        <input type="text" name="address" id="address" placeholder="Endereço" />
        <input type="text" name="cep" id="cep" placeholder="CEP" />
        <input type="email" name="email" id="email" placeholder="Email" />
        <button name="register">Cadastrar</button>
        <p class="message">Já possui uma conta? <a href="#">Entrar</a></p>
    </form>

    <script src="../js/script.js"></script>
</body>

</html>