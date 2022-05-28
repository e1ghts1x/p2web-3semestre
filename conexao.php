<?php
    define("IP", "127.0.0.1");
    define("USUARIO","root");
    define("SENHA","");
    define("DATABASE","form_game2");
    $conectar = mysqli_connect(IP, USUARIO, SENHA, DATABASE) or die ("Não foi possível realizar a conexão");
?>
