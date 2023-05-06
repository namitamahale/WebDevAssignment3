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
    gameOverHTML += "<h2 id='score'> Your scores: " + quiz.score + "</h2>" + "<center><br><a href='Level2.html'><button style='background:DarkBlue; color:white; width:70px; height:40px; border:none; cursor:pointer'>Replay</button></a>&nbsp&nbsp&nbsp<a href='Level3.html'><button style='background:LightBlue; color:white; width:90px; height:40px; border:none; cursor:pointer'>Previous</button></a>&nbsp&nbsp&nbsp<a href='L2answers.html'><button style='background:Orange; color:white; width:70px; height:40px; border:none; cursor:pointer'>Answers</button></a>&nbsp&nbsp&nbsp<a href='Level3.html'><button style='background:DarkGreen; color:white; width:90px; height:40px; border:none; cursor:pointer'>Next Level</button></a>&nbsp&nbsp&nbsp<a href='BookBasket.php'><button style='background:Red; color:white; width:70px; height:40px; border:none; cursor:pointer'>Quit</button></a></center>";
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
};
 
// create questions here
var questions = [
    new Question("The sun sets in the __________?", ["North", "South","East", "West"], "West"),
    new Question("What type of gas do plants absorb?", ["Hydrogen", "Carbon Dioxide", "Oxygen", "Nitrogen"], "Carbon Dioxide"),
    new Question("Who was the first prime minister of India?", ["Pandit Jawaharlal Nehru", "Mahatma Gandhi","Bill Gates", "Neil Armstrong"], "Pandit Jawaharlal Nehru"),
    new Question("How many millimeters are there in a centimeter?", ["100mm", "1000mm", "10mm", "1mm"], "10mm"),
    new Question("What type of tree do dates grow on?", ["Coconut", "Pine", "Palm", "Birch"], "Palm")
];
 
// create quiz
var quiz = new Quiz(questions);
 
// display quiz
populate();


