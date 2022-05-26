<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/quiz.css">
    <link rel="icon" href="imgs/logo.png">
    <title>Quiz Web</title>
</head>
<body>
    <div class="quiz-container" id="quiz">
        <div class="quiz-header">
            <h1><?php ?></h1>
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
</body>
</html>