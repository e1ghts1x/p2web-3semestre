const quizData = [
    {
        question: "Quais os dados do PHP que estão contidos no grupo Escalar?", //PHP
        a: "Objetos, null, Inteiros e Arrays",
        b: "Arrays e Objetos",
        c: "Recursos e null",
        d: "Inteiros, Ponto Flutuante, String e Booleanos",
        correct: "d",
    },
    {
        question: "O que significa a sigla CSS?", //CSS
        a: "Central Style Sheets",
        b: "Cascading Style Sheets",
        c: "Cascading Simple Sheets",
        d: "Cars SUVs Sailboats",
        correct: "b",
    },
    {
        question: "O que significa a sigla HTML?", //Html
        a: "Hypertext Markup Language",
        b: "Hypertext Markdown Language",
        c: "Hyperloop Machine Language",
        d: "Helicopters Terminals Motorboats Lamborginis",
        correct: "a",

    },
    {
        question: "Assinale a frase verdadeira:", //PHP
        a: "As constantes podem possuir como valor somente tipos escalares, não sendo aceitos os tipos inteiros, string, pontos flutuantes e booleanos",
        b: "Quando uma constante é especificada, seu valor não pode ser alterado ou removido",
        c: "Para se saber se uma constante já foi definida, utiliza a função return()",
        d: "Variáveis são utilizadas no PHP através do sinal $$",
        correct: "b",
    },
    {
        question: "Qual a função do atributo target?", //Html
        a: "Tag responsável pela criação de um link",
        b: "Abrir o link na mesma aba",
        c: "Indicar o caminho relativo ou absoluto de uma outra página",
        d: "Informar onde o link será aberto",
        correct:"d",
    },
    {
        question: "Para que serve a instrução DOCTYPE?", //Html
        a: "Indicar a versão do HTML",
        b: "Inserir elementos em um documento",
        c: "Indicar o idioma",
        d: "Representar o cabeçalho do documento",
        correct:"a",
    },
    {
        question: "Para exibir valores no corpo da página, é preciso usar a função ", //Javascript
        a: "Windows.open()",
        b: "document.write()",
        c: "alert()",
        d: "Nenhuma das alternativas",
        correct:"b",
    },
    {
        question: "Como é definido os métodos e atributos de uma classe no PHP?", //PHP
        a: "public, private e protected",
        b: "function, class e public",
        c: "construct e destruct",
        d: "set, class e construct",
        correct:"a",
    },
    {
        question: "Qual é a propriedade do CSS que estabelece o raio da borda inferior esquerda do box?", //CSS
        a: "border-top-left-radius",
        b: "border-radius",
        c: "border-bottom-left-radius",
        d: "border-top-right-radius",
        correct:"c",
    },
];

const quiz = document.getElementById('quiz')
const answerEls = document.querySelectorAll('.answer')
const questionEl = document.getElementById('question')
const a_text = document.getElementById('a_text')
const b_text = document.getElementById('b_text')
const c_text = document.getElementById('c_text')
const d_text = document.getElementById('d_text')
const submitBtn = document.getElementById('submit')


let currentQuiz = 0
let score = 0

loadQuiz()

function loadQuiz(){

    deselectAnswers()

    const currentQuizData = quizData[currentQuiz]

    questionEl.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}

function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
}

function getSelected() {
    let answer
    answerEls.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })
    return answer
}


submitBtn.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
       if(answer === quizData[currentQuiz].correct) {
           score++
       }

       currentQuiz++

       if(currentQuiz < quizData.length) {
           loadQuiz()
       } else if(score > 4){
           quiz.innerHTML = `
           <h2>Você respondeu ${score}/${quizData.length} questões corretamente (╯°□°）╯︵ ┻━┻</h2>

           <button onclick="window.location.href='index.html'">Menu Principal</button>
           `
       } else if(score < 4){
           quiz.innerHTML = `
           <h2>Você respondeu ${score}/${quizData.length} questões corretamente  ┬─┬ ノ( ゜-゜ノ)</h2>
            <h2>Estude mais</h2>
            <button onclick="window.location.href='Resumo.html'">Clique aqui</button>`
       }
    }
})
