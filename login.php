<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include("conexao.php");
    if(empty($_POST["user"]) || empty($_POST["password"])){
        $_SESSION["empty_user"] = true;
        header("Location: index.php");
        exit();
    }
?>