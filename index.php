<?php

?>
<!DOCTYPE html>
<html>

<head>
    <title>Form Game 2.0</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="icon" href="/imgs/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Roboto:wght@100&display=swap"
        rel="stylesheet">
    <!---->
    <script src="/scripts/buttons.js"></script>
</head>

<body>
    <div class="formulario">
        <h1>Login</h1>
        <form name="form" action="login.php">
            <input type="text" name="user" placeholder="Usuário" maxlenght="50"><br>
            <input type="password" id="password" name="password" placeholder="Senha"><br>
            <button type="submit" name="button">Entrar</button>
        </form>
        <button onclick="darkmode()">Modo escuro</button>
        <button onclick="showPassword()">Mostrar Senha</button>

    </div>
</body>

</html>

