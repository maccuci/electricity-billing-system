<?php
require_once "config.php";
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
        <button>Entrar</button>
        <p class="message">Não possui uma conta? <a href="#">Cadastrar</a></p>
    </form>

    <script src="../js/script.js"></script>
</body>

</html>