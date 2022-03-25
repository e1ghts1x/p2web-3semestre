<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    if(!$_SESSION['user']){
        header('Location: login.html');
        exit();
    }
?>