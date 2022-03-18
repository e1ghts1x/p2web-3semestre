<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include("conexao.php"); 

    if (empty($_POST["user"]) || empty($_POST["password"])){
        echo "O usuário e a senha não podem ser vazios.";
        exit();
    }
?>