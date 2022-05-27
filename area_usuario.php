<?php
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
    include("verifica_login.php");
    include("conexao.php");
    $usuario = $_SESSION['user'];
    $query = "SELECT nome FROM usuario where usuario = '{$usuario}';";
    $result = mysqli_query($conectar, $query);
    $welcome = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="styles/index.css">
        <link rel="stylesheet" href="styles/buttons.css">
        <link rel="icon" href="imgs/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Área do Usuário</title>
    </head>
    <body class="">
        <button class="btn-default" onclick="toggleDarkMode()">Modo escuro</button>
            <div class="formulario">
                <h1>Selecione</h1>
                <button class="btn-default" onclick="window.location='quiz.php';">Fazer o quiz</button><br>
                <button class="btn-default" onclick="window.location='deletar_conta.php';">Deletar a conta</button>
                <button class="btn-default" onclick="window.location='logout.php';">Logout</button>
            </div>
        <script src="scripts/buttons.js"></script>
    </body>
</html>