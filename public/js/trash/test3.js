function Question(text, choice, answer){
    this.text = text;
    this.choice = choice;
    this.answer = answer;
}
function Quiz(questions){
    this.score = 0;
    this.questions = questions;
    this.questionIndex = 0;
}

Quiz.prototype.correctAnswer = function(answer){
    return answer == this.questions[this.questionIndex].answer;
 }

var questions = [
  new Question('If no touching occurs, an action does not constitute sexual harassment.', ['True', 'False'], 'True'),
  new Question('If a co-worker tells you they have been sexually harassed, it is best to…..', ['a.Not possible because it is consensual.', 'b. It depends on whether the company has a sexual harassment policy.', 'c.	Yes; especially if the relationship ends badly.', 'd.	Only if the employees work in the same department.'], 'a.Not possible because it is consensual.'),
  new Question('명령어 기반의 인터페이스를 의미하는 용어는?', ['GUI','CLI','HUD','SI'],'CLI'),
  new Question('CSS속성 중 글자의 굵기를 변경하는 속성은?', ['font-size', 'font-style', 'font-weight', 'font-variant'], 'font-weight'),
  new Question('명령어 기반의 인터페이스를 의미하는 용어는?', ['GUI','CLI','HUD','SI'],'CLI'),
  new Question('CSS속성 중 글자의 굵기를 변경하는 속성은?', ['font-size', 'font-style', 'font-weight', 'font-variant'], 'font-weight'),
  new Question('명령어 기반의 인터페이스를 의미하는 용어는?', ['GUI','CLI','HUD','SI'],'CLI'),
  new Question('CSS속성 중 글자의 굵기를 변경하는 속성은?', ['font-size', 'font-style', 'font-weight', 'font-variant'], 'font-weight')
];

var quiz = new Quiz(questions);

function update_quiz(){
  var question = document.getElementById('question');
  var idx = quiz.questionIndex + 1;
  var choice = document.querySelectorAll('.btn_test');

  question.innerHTML = '문제' + idx +') ' + quiz.questions[quiz.questionIndex].text;

  for (var i=0; i<4; i++){
    
    if (quiz.questions[quiz.questionIndex].choice[i] != undefined){
      choice[i].style.display='block';
      choice[i].innerHTML = quiz.questions[quiz.questionIndex].choice[i];
    }
    else {
      choice[i].style.display='none';
    }
  }
  progress();
}

var btn = document.querySelectorAll('.btn_test')
function progress(){
  var progress = document.getElementById('progress');
  progress.innerHTML = '문제 '+ (quiz.questionIndex+1) + ' /'+ quiz.questions.length;
}

function result(){
  var quiz_div = document.getElementById('quiz');

  var per = parseInt((quiz.score*100)/quiz.questions.length);

  var txt = '<h1 style="padding:0.5em;">RESULT</h1>' +'<span style="font-size: 35px">'+quiz.score + '/' + quiz.questions.length+'</span>'+ '<h1 id="score"">YOUR SCORE: </h1>' +'<h1 class="score2"  style="padding-top:0;">'+per+'%</h1>';

  quiz_div.innerHTML = txt;

  if(per<80){
    txt += '<h2 ><a href="/fail3" style="color:red; font-size:40px; text-decoration: none;" >FAIL</a></h2>';
    txt += '<button type="button" class="btn btn-outline-secondary" onclick="location.href=\'/fail3\'" style="font-size:2rem;">OK</button>';
    quiz_div.innerHTML = txt;
    document.querySelector('.score2').style.color = "red";


  } else {
    txt += '<h2><a href="/pass3" style="color:green; font-size:40px; text-decoration: none;">PASS</h2>';
    txt += '<button type="button" class="btn btn-outline-secondary" onclick="location.href=\'/pass3\'" style="font-size:2rem;">OK</button>';
    quiz_div.innerHTML = txt;
    // document.getElementById('score').style.color = "green";
    document.querySelector('.score2').style.color = "green";
    
  }
}

function checkAnswer(i){
  btn[i].addEventListener('click', function(){
    var answer = btn[i].innerText;

    if(quiz.correctAnswer(answer)){
      // alert('정답입니다');
      quiz.score++;
    }else{
      // alert('틀렸습니다')
    };

    if(quiz.questionIndex < quiz.questions.length-1){
      quiz.questionIndex++;
      update_quiz();
    } else {
      result();
    }
  });
}
for(var i=0; i<btn.length; i++){
  checkAnswer(i);
}
update_quiz();
