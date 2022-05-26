<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include("conexao.php"); 
    
    if(empty($_POST["user"]) || empty($_POST["nome"]) || empty($_POST["password"])){
        $_SESSION['incompleto'] = true;
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
        <title>Cadastro FormGame 2.0</title>
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
                <h2>Cliente Cadastrado com sucesso!</h2>
                <button class="btn-default" onclick="window.location='login.html';">Login</button>
                <?php 
                    endif;
                    unset($_SESSION['cliente_cadastrado']);
                ?>
                <?php
                    if (isset($_SESSION['erro_cliente_nao_cadastrado'])) :
                ?>
                <h2>Erro, cliente não cadastrado</h2>
                <button class="btn-default" onclick="window.location='cadastro.html';">Retornar</button>
                <?php 
                    endif;
                    unset($_SESSION['erro_cliente_nao_cadastrado']);
                ?>
                <?php
                    if (isset($_SESSION['usuario_existente'])) :
                ?>
                <h2>Nome de usuário já cadastrado, escolha outro.</h2>
                <button class="btn-default" onclick="window.location='cadastro.html';">Retornar</button>
                <?php 
                    endif;
                    unset($_SESSION['usuario_existente']);
                ?>
            </div>
        </div>
    </body>
    <script src="scripts/buttons.js"></script>
</html>