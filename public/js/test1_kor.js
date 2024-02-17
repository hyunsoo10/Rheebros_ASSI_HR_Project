
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
  new Question('신체 접촉이 없다면 이것은 성희롱이 될 수 없다.', ['a. 그렇다', 'b. 그렇지 않다',], 'b. 그렇지 않다'),

  new Question('성적인 농담에 모두가 웃는다면 이는 성희롱이 될 수 없다.', ['a. 그렇다', 'b. 그렇지 않다'], 'b. 그렇지 않다'),

  new Question('모독적인 언어 사용은 성희롱이 아니다.', ['a. 그렇다', 'b. 그렇지 않다'], 'b. 그렇지 않다'),
  
  new Question('합의 관계에 성희롱 주장이 가능한가?', ['a. 합의 관계이므로 불가능하다.', 'b. 회사에 성희롱 방침이 있는지에 따라 다르다.', 'c. 가능. 특히 해당 관계가 좋지 않게 끝날 경우.', 'd. 해당 직원들이 같은 부서에서 근무하는 경우에 한정.'], 'c. 가능. 특히 해당 관계가 좋지 않게 끝날 경우.'),

  new Question('동료가 성희롱을 당했다고 말하면 당신은 어떻게 해야하는가?', ['a. 사건을 웃어 넘기며 가해자로 지목된 사람을 옹호한다.', 'b. 회사 정책을 이야기하고, 인사 담당자에게 보고해야 한다고 말한다.', 'c.즉시 인사과에 연락해 가해자의 해고를 요청한다.', 'd. 동료의 행동을 과민반응이라고 말한 뒤 지목된 가해자에게 가서 동료가 그를 비난한다고 전한다. ' ], 'b. 회사 정책을 이야기하고, 인사 담당자에게 보고해야 한다고 말한다.'),

  new Question('당신이 직장내에서 당하는 괴롭힘이 (성)희롱으로 성립이 되려면?', ['a. 심히 불쾌해야 한다.', 'b. 원치 않은 것이어야 한다', 'c. A와 B 모두 해당', 'd.	남녀 사이의 일이어야만 한다'], 'c. A와 B 모두 해당'),

  new Question('직장내에서 성적인 발언 및 성적 농담을 하여 근무환경의 분위기를 흐리는 것은 어떤 종류의 성희롱에 속하는가? ', ['a. 대가성(Quid Pro Quo) 성희롱', 'b. 적대적 환경 성희롱(Work Hostile Environment)', 'c.	일반적인 사무 환경', 'd. A와 B 모두 해당'], 'b. 적대적 환경 성희롱(Work Hostile Environment)'),

  new Question('당신은 부장이 부하직원인 마크에게 성적인 발언을 하는 것을 목격한다. 마크가 해당 발언을 불편해 하는 것 같다고 여긴 당신은 마크에게 다가가 신고하라고 이야기한다. 마크는 부장이 자기의 상사이며 모두가 부장을 존경하기 때문에 신고를 해도 자기를 믿어주지 않을거라며 주저한다. 이럴 때 당신은 어떻게 해야 하는가?', ['a. 아무 것도 하지 않고 문제가 해결되기를 바라야 한다.', 'b.	재발을 대비해 증거가 될 만한 사항들을 적어 두어야 한다.', 'c. 당신이 직접 부장에게 가서 마크에 대한 해당 발언을 중지하라고 말해야 한다.', 'd. 목격한 것을 상사 또는 인사 관리자에게 보고해야 한다.'], 'd. 목격한 것을 상사 또는 인사 관리자에게 보고해야 한다.'),

  new Question('EZ Computers의 사장은 알렉스를 보조원으로 고용한다. 알렉스가 회사에서 업무를 시작하고 얼마 지나지 않아, 사장은 알렉스에게 EZ Computers에서 계속 일하려면 자신과 섹스를 해야만 한다고 말한다. 알렉스는 그 요구가 매우 불쾌했으나 직장을 잃고 싶지 않기 때문에 하는 수 없이 수락하여 관계를 맺는다. 알렉스가 본인의 결정에 따라 요구에 따랐으므로 이 상황은 성희롱이 아니라 법적 성인이 성관계에 동의한 것이라 성희롱이 될 수 없다.', ['a. 그렇다', 'b. 그렇지 않다'], 'b. 그렇지 않다'),

  new Question('성희롱을 막는 가장 좋은 방법 중 하나는 그저 가해자를 무시하는 것이다.', ['a. 그렇다', 'b. 그렇지 않다'], 'b. 그렇지 않다'),

  new Question('시설 서비스 감독인 하워드는 여성의 나체가 있는 달력을 사무실에 걸어두고 있다.  달력은:', ['a. 누군가가 불만을 제기하지 않는 한 걸어둘 수 있다', 'b. 적대적인 근무 환경에 기여할 수 있다', 'c.	헌법 수정 제1조에 의해 표현의 자유로 보호 받는다', 'd. 하워드의 일일 뿐 다른 누구의 문제도 아니다. 달력이 마음에 들지 않는다면 그의 사무실에 가지 않으면 그만이다.'], 'b. 적대적인 근무 환경에 기여할 수 있다'),

  new Question('멋있게 이발을 한 이성 동료의 외모를 칭찬하는 것은 성희롱이다. (예: “지혜씨, 머리 이쁘게 잘 자르셨네요.”)', ['a. 그렇다', 'b. 그렇지 않다'], 'b. 그렇지 않다'),
  
  new Question('소냐는 Ace 모델 에이전시에서 일한다. 주요 고객 중 한 사람이 소냐를 출장 중에 성희롱했다. 소냐는 매니저인 짐에게 이를 보고했으나, 짐은 해당 고객이 소냐와 함께 일하지 않으면 에이전시를 이용하지 않겠다고 했다며 소냐에게 참고 견디라고 말했다. 소냐는 해당 고객의 행동이 지속됨에 따라 에이전시에서의 일을 관두었다.', ['a. 매니저가 소냐의 불만 사항에 대해 조치를 취하지 않았으므로 소냐는 성희롱 주장에 대한 근거가 있다.', 'b. 모델 업계에서는 이런 유형의 대접을 원하는 고객이 많으므로 소냐는 그에 맞출 줄 알아야 한다.', 'c. 소냐는 Ace 모델 에이전시를 고소할 근거는 없으나, 고객을 고소할 수는 있다.', 'd. 소냐는 에이전시를 그만두었으므로 성희롱으로 고소할 권리가 없다.'], 'a. 매니저가 소냐의 불만 사항에 대해 조치를 취하지 않았으므로 소냐는 성희롱 주장에 대한 근거가 있다.')
];

var quiz = new Quiz(questions);

var correctAnswerList= []
var questionsList = []
for (var i = 0; i<13; i++){
  correctAnswerList.push(questions[i].answer);
  questionsList.push(questions[i].text);
}

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

  var score = parseInt(quiz.score);

  var txt = '<h1 style="padding:0.5em;">결과</h1>' +'<span style="font-size: 35px">'+quiz.score + '/' + quiz.questions.length+'</span>'+ '<h1 id="score"">당신의 점수: </h1>' +'<h1 class="score2"  style="padding-top:0;">'+per+'%</h1>';

  quiz_div.innerHTML = txt;

  if(score<11){
    txt += '<h2 ><a href="/fail1" style="color:red; font-size:40px; text-decoration: none;" >FAIL</a></h2>';
    txt += '<button type="button" class="btn btn-outline-secondary" onclick="location.href=\'/fail1\'" style="font-size:2rem;">OK</button>';
    quiz_div.innerHTML = txt;
    document.querySelector('.score2').style.color = "red";


  } else {
    txt += '<h2><a href="/pass1" style="color:green; font-size:40px; text-decoration: none;">PASS</h2>';
    txt += '<h1>정답 및 해설</h1>'
    txt += '<table class="table">'
    txt += '<tbody>'
    txt += '<thead> <tr>'+ '<th style="width: 250px;"> 문제 </th>'+ '<th> 정답 </th>' + '<th> 나의 답 </th>' + '<th>정답 여부</th>' + '</tr> </thead>'
  
    for (var i = 0; i<13; i++){
      var anwerResult="";
      if (correctAnswerList[i]==userAnswerList[i])
      {answerResult = '<i class="fa-solid fa-o" style="color: green;"></i>';}
      else{answerResult = '<i class="fa-solid fa-x" style="color: red;"></i>';}
      txt += '<tr>'+ '<td>' + questionsList[i] + '</td>'+ '<td>'+correctAnswerList[i] +'</td>' + '<td>' + userAnswerList[i] + '</td>'+ '<td>' + answerResult +'</td>'+'</tr>'
    }
    txt += '</tbody>'
    txt += '</table>'
    txt += '<button type="button" class="btn btn-outline-secondary" onclick="location.href=\'/pass1\'" style="font-size:2rem;">OK</button>';
    quiz_div.innerHTML = txt;
    // document.getElementById('score').style.color = "green";
    document.querySelector('.score2').style.color = "green";
    
  }
}

var userAnswerList = [];

function checkAnswer(i){
  btn[i].addEventListener('click', function(){
    var answer = btn[i].innerText;
    userAnswerList.push(answer);
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
