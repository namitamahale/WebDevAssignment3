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
    gameOverHTML += "<h2 id='score'> Your scores: " + quiz.score + "</h2>" + "<center><br><a href='Level5.html'><button style='background:DarkBlue; color:white; width:70px; height:40px; border:none; cursor:pointer'>Replay</button></a>&nbsp&nbsp&nbsp<a href='Level4.html'><button style='background:LightBlue; color:white; width:90px; height:40px; border:none; cursor:pointer'>Previous</button></a>&nbsp&nbsp&nbsp<a href='L5answers.html'><button style='background:Orange; color:white; width:70px; height:40px; border:none; cursor:pointer'>Answers</button></a>&nbsp&nbsp&nbsp<a href='BookBasket.php'><button style='background:Red; color:white; width:70px; height:40px; border:none; cursor:pointer'>Quit</button></a></center>";
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
};
 
// create questions here
var questions = [
    new Question("If set A = {1, 2, 3, 4, 5…} is given, then it represents:", ["Whole numbers", "Rational Numbers","Natural numbers", "Complex numbers"], "Natural numbers"),
    new Question("Where is the oldest tree in the world?", ["California", "America", "Netherlands", "Singapore"], "California"),
    new Question("The only species of cat that lives and hunts in groups is:", ["lion", "leopard","jaguar", "cougar"], "lion"),
    new Question("In which country was a method for making rust-resistant iron discovered in the fifth century B.C.?", ["Sumeria", "Egypt", "India", "Babylon"], "India"),
    new Question("The local name of Mohenjodaro is:", ["Mould of the living", "Mould of the tree", "Mould of the dead", "Mould of the survivor"], "Mould of the dead"),
    new Question("The solution of the equations x-y=2 and x+y=4 is:", ["3 and 1", "4 and 3", "5 and 1", "-1 and -3"], "3 and 1"),
    new Question("Nitrous oxide, commonly called laughing gas, has been a matter of concern to environmentalists recently because:", ["It is thought to cause cancer at low concentrations", "It produces photochemical smog", "It is a greenhouse gas.", "None of the above"], "It is a greenhouse gas."),
    new Question("Which popular fast food chain restaurant was first opened in 1955?", ["McDonald's", "KFC", "Starbucks", "Subway"], "McDonald's")
];
 
// create quiz
var quiz = new Quiz(questions);
 
// display quiz
populate();


