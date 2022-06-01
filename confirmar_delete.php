<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    include('verifica_login.php');
    include('conexao.php');
    $usuario = $_SESSION['user'];
    $query = "SELECT id_usuario FROM usuario where usuario = '{$usuario}';";
    $result = mysqli_query($conectar, $query);
    $fetch = $result->fetch_assoc();
    $id_usuario = $fetch['id_usuario'];
    $query = "DELETE FROM usuario WHERE id_usuario = '{$id_usuario}';";
    $result = mysqli_query($conectar, $query);
    if($result){
        $_SESSION['concluido'] = true;
        session_destroy();
    }
    else{
        $_SESSION['erro'] = true;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles/index.css">
        <link rel="stylesheet" href="styles/buttons.css">
        <link rel="stylesheet" href="styles/error.css">
        <title>...</title>
        <link rel="icon" href="imgs/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    </head>
    <body>
        <div class="erro">
            <div class="formulario">
                <?php 
                    if (isset($_SESSION['concluido'])) :
                ?>
                    <h2>Acho que o jogo não é para você ¯\_(ツ)_/¯</h2>
                    <button class="btn-default" onclick="window.location='index.html';">Retornar</button>
                <?php
                    endif;
                    unset($_SESSION['concluido']);
                ?>
                <?php 
                    if (isset($_SESSION['erro'])) :
                ?>
                    <h2>Ocorreu um erro :D</h2>
                    <button class="btn-default" onclick="window.location='index.html';">Retornar</button>
                <?php
                    endif;
                    unset($_SESSION['erro']);
                ?>
            </div>
        </div>
        <script src="scripts/buttons.js"></script>
    </body>
</html>