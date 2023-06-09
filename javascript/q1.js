function Quiz(questions) {
    this.score = 0;
    this.questions = questions;
    this.questionIndex = 0;
}
 
Quiz.prototype.getQuestionIndex = function() {
    return this.questions[this.questionIndex];
}
 
Quiz.prototype.guess = function(answer) {
    if(this.getQuestionIndex().isCorrectAnswer(answer)) {
        this.score++;
    }
 
    this.questionIndex++;
}
 
Quiz.prototype.isEnded = function() {
    return this.questionIndex === this.questions.length;
}
 
 
function Question(text, choices, answer) {
    this.text = text;
    this.choices = choices;
    this.answer = answer;
}
 
Question.prototype.isCorrectAnswer = function(choice) {
    return this.answer === choice;
}
 
 
function populate() {
    if(quiz.isEnded()) {
        showScores();
    }
    else {
        // show question
        var element = document.getElementById("question");
        element.innerHTML = quiz.getQuestionIndex().text;
 
        // show options
        var choices = quiz.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            guess("btn" + i, choices[i]);
        }
 
        showProgress();
    }
};
 
function guess(id, guess) {
    var button = document.getElementById(id);
    button.onclick = function() {
        quiz.guess(guess);
        populate();
    }
};
 
 
function showProgress() {
    var currentQuestionNumber = quiz.questionIndex + 1;
    var element = document.getElementById("progress");
    element.innerHTML = "Question " + currentQuestionNumber + " of " + quiz.questions.length;
};
 
function showScores() {
    var gameOverHTML = "<h1>Result</h1>";
    gameOverHTML += "<h2 id='score'> Your scores: " + quiz.score + "</h2>"+ "<center><br><a href='Level1.html'><button style='background:DarkBlue; color:white; width:70px; height:40px; border:none; cursor:pointer'>Replay</button></a>&nbsp&nbsp&nbsp<a href='L1answers.html'><button style='background:Orange; color:white; width:70px; height:40px; border:none; cursor:pointer'>Answers</button></a>&nbsp&nbsp&nbsp<a href='Level2.html'><button style='background:DarkGreen; color:white; width:90px; height:40px; border:none; cursor:pointer'>Next Level</button></a>&nbsp&nbsp&nbsp<a href='BookBasket.php'><button style='background:Red; color:white; width:70px; height:40px; border:none; cursor:pointer'>Quit</button></a></center>";
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
};
 
// create questions here
var questions = [
    new Question("What is the capital of India?", ["Maharashtra", "Goa","New Delhi", "Japan"], "New Delhi"),
    new Question("Brain of computer is?", ["Monitor", "CPU", "Speaker", "Mouse"], "CPU"),
    new Question("What is the symbol of pi?", ["€", "π","Ω", "∞"], "π"),
    new Question("What planet is known as the red planet?", ["Sun", "Jupiter", "Moon", "Mars"], "Mars"),
    new Question("Where is Taj Mahal Located?", ["Assam", "Agra", "Arunachal Pradesh", "Delhi"], "Agra")
];
 
// create quiz
var quiz = new Quiz(questions);
 
// display quiz
populate();


