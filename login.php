<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include("conexao.php"); 

    if (empty($_POST["user"]) || empty($_POST["password"])){
        $_SESSION['nao_autorizado'] = true;
    }
    else{
        $user = mysqli_real_escape_string($conectar, $_POST['user']);
        $password = mysqli_real_escape_string($conectar, $_POST['password']);

        $query = "SELECT id_usuario, usuario FROM usuario WHERE usuario = '{$user}' and senha = md5('{$password}')";
        $result = mysqli_query($conectar, $query);

        $row = mysqli_num_rows($result);

        if($row == 1) {
            $_SESSION['user'] = $user;
            header('Location: quiz.php');
            exit();
        } else{
            $_SESSION['nao_autorizado'] = true;
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles/index.css">
        <link rel="stylesheet" href="styles/buttons.css">
        <link rel="stylesheet" href="styles/error.css">
        <link rel="icon" href="imgs/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>...</title>
    </head>
    <body>
        <div class="erro">
            <div class="formulario">
                <?php 
                    if (isset($_SESSION['nao_autorizado'])) :
                ?>
                    <h2>Acesso não autorizado</h2>
                <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                ?>
                <button class="btn-default" onclick="window.location='login.html';">Retornar</button>
            </div>
        </div>
    </body>
    <script src="scripts/buttons.js"></script>
</html>