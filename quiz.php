<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    include("verifica_login.php");
    include("conexao.php");
    $usuario = $_SESSION['user'];
    $query = "SELECT nome FROM usuario where usuario = '{$usuario}';";
    $result = mysqli_query($conectar, $query);
    $welcome = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="styles/quiz.css">
    <link rel="stylesheet" href="styles/buttons.css">
    <link rel="icon" href="imgs/icon.png">
    <title>Quiz Web</title>
</head>
<body class="">
    <button onclick="location.href='area_usuario.php'" class="btn-return-quiz">Retornar</button>
    <div class="quiz-container" id="quiz">
        <div class="quiz-header">
            <h3>Bem-vindo: <?php echo $welcome['nome'];?></h3>
            <h2 id="question">Question Text</h2>
            <ul>
                <li>
                    <input type="radio" name="answer" id="a" class="answer">
                    <label for="a" id="a_text">Resposta</label>
                </li>
                <li>
                    <input type="radio" name="answer" id="b" class="answer">
                    <label for="b" id="b_text">Resposta</label>
                </li>
                <li>
                    <input type="radio" name="answer" id="c" class="answer">
                    <label for="c" id="c_text">Resposta</label>
                </li>
                <li>
                    <input type="radio" name="answer" id="d" class="answer">
                    <label for="d" id="d_text">Resposta</label>
                </li>
            </ul>
        </div>
        <button id="submit">Enviar</button>
    </div>
    <script src="scripts/quiz.js"></script>
    <script src="scripts/buttons.js"></script>
    <audio loop id="foobar" src="/res/tale.mp3" preload="none"></audio>
    <script src="scripts/music.js"></script>
</body>
</html>