<?php
    define("IP", "us-cdbr-east-05.cleardb.net");
    define("USUARIO","b94f1b6d4cf98d");
    define("SENHA","f4815e7f");
    define("DATABASE","heroku_20c253997cce061");
    $conectar = mysqli_connect(IP, USUARIO, SENHA, DATABASE) or die ("Não foi possível realizar a conexão");
?>
