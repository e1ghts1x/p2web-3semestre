<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include("conexao.php"); 
    
    if(empty($_POST["user"]) || empty($_POST["nome"]) || empty($_POST["password"])){
        $_SESSION['incompleto'] = true;
    }elseif(strlen($_POST["password"])<8){
        $_SESSION['senha_fraca'] = true;
    }
    else{
        $usuario = $_POST['user'];
        $nome = $_POST['nome'];
        $password = $_POST['password'];

        $queryVerificausu = "SELECT * FROM usuario WHERE usuario LIKE '%$usuario%';";
        $resultUsu = mysqli_query($conectar, $queryVerificausu);
        $row = mysqli_num_rows($resultUsu);
        if($row >= 1){
            $_SESSION['usuario_existente'] = true;
        }
        else{
            $queryCadastro = "CALL insereCadastro('{$usuario}', '{$nome}', md5('{$password}'))";
            $resultCadastro = mysqli_query($conectar,$queryCadastro);

            if($resultCadastro){
                $_SESSION['cliente_cadastrado'] = true;
            } else{
                $_SESSION['erro_cliente_nao_cadastrado']= true;
            }
        }
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
                    if (isset($_SESSION['incompleto'])) :
                ?>
                <h2>Preencha todos os campos solicitados</h2>
                <button class="btn-default" onclick="window.location='cadastro.html';">Retornar</button>
                <?php 
                    endif;
                    unset($_SESSION['incompleto']);
                ?>
                <?php
                    if (isset($_SESSION['cliente_cadastrado'])) :
                ?>
                <h2>Usu??rio cadastrado com sucesso!</h2>
                <button class="btn-default" onclick="window.location='login.html';">Login</button>
                <?php 
                    endif;
                    unset($_SESSION['cliente_cadastrado']);
                ?>
                <?php
                    if (isset($_SESSION['erro_cliente_nao_cadastrado'])) :
                ?>
                <h2>Erro, usu??rio n??o cadastrado</h2>
                <button class="btn-default" onclick="window.location='cadastro.html';">Retornar</button>
                <?php 
                    endif;
                    unset($_SESSION['erro_cliente_nao_cadastrado']);
                ?>
                <?php
                    if (isset($_SESSION['usuario_existente'])) :
                ?>
                <h2>Nome de usu??rio j?? cadastrado, escolha outro.</h2>
                <button class="btn-default" onclick="window.location='cadastro.html';">Retornar</button>
                <?php 
                    endif;
                    unset($_SESSION['usuario_existente']);
                ?>
                <?php
                    if (isset($_SESSION['senha_fraca'])) :
                ?>
                <h2>Sua senha deve conter ao menos 8 caracteres.</h2>
                <button class="btn-default" onclick="window.location='cadastro.html';">Retornar</button>
                <?php 
                    endif;
                    unset($_SESSION['senha_fraca']);
                ?>
            </div>
        </div>
    </body>
    <script src="scripts/buttons.js"></script>
</html>