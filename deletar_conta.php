<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    include("verifica_login.php");
    include("conexao.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles/index.css">
        <link rel="stylesheet" href="styles/buttons.css">
        <link rel="stylesheet" href="styles/error.css">
        <title>Deletar conta</title>
        <link rel="icon" href="imgs/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    </head>
    <body>
        <button class="btn-default" onclick="toggleDarkMode()">Modo escuro</button>
        <div class="formulario">
            <h1>Tem certeza?</h1>
            <button class="btn-default" onclick="window.location='confirmar_delete.php';">SIM</button>
            <button class="btn-default" onclick="window.location='area_usuario.php';">Não :D</button>
        </div>
        <script src="scripts/buttons.js"></script>
    </body>
</html>