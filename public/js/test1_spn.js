
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
  new Question('Si no se toca, la acción no constituye acoso sexual.', ['a. Verdadero', 'b. Falso'], 'b. Falso'),

  new Question('Si todo el mundo se ríe de los chistes verdes, no se puede considerar acoso sexual.', ['a. Verdadero', 'b. Falso'], 'b. Falso'),

  new Question('El uso de lenguaje grosero no es acoso sexual.', ['a. Verdadero', 'b. Falso'], 'b. Falso'),

  new Question('¿Puede una relación consentida dar lugar a una denuncia de acoso sexual?', ['a. No es posible, porque es consentida.', 'b. Depende de si la empresa tiene una política de acoso sexual.', 'c. Sí; especialmente si la relación termina mal.', 'd. Solo si los empleados trabajan en el mismo departamento.'], 'c. Sí; especialmente si la relación termina mal.'),

  new Question('Si un compañero de trabajo te dice que ha sido acosado sexualmente, lo mejor es…', ['a. Reírse del incidente e inventar excusas para el presunto acosador.', 'b. Señalar la política de la compañía y decirle que debe informar de ello al director de recursos humanos.', 'c. Ponerse en contacto con Recursos humanos inmediatamente y solicitar que se despida al acosador.', 'd. Decirle que está reaccionando de forma exagerada y luego decirle al presunto acosador que su compañero de trabajo está haciendo una acusación contra él.' ], 'b. Señalar la política de la compañía y decirle que debe informar de ello al director de recursos humanos.'),

  new Question('El acoso ilegal debe ser...', ['a. Molesto', 'b. No solicitado', 'c. Tanto A como B', 'd.	Solo entre hombres y mujeres'], 'c. Tanto A como B'),

  new Question('Hacer comentarios sexuales y permitir que circulen chistes sexuales por la oficina se llama...', ['a. Acoso Quid Pro Quo', 'b. Acoso de ambiente hostil', 'c.	Un ambiente de oficina', 'd. Tanto A como B'], 'b. Acoso de ambiente hostil'),

  new Question('Eres testigo de que Mandy hace comentarios sexuales hacia Mark. A Mark no parecen agradarle los comentarios, así que le preguntas al respecto. A Mark dice que no le gustan, pero tiene miedo de decirle algo a los directores porque Mary es una empleada de alto nivel y a todo el mundo le gusta. Debes...', ['a. No hacer nada y esperar a que el problema se resuelva solo.', 'b. Ponerlo por escrito y archivarlo por si vuelve a suceder.', 'c. Ir con Mandy y decirle que deje de hacerle los comentarios a Mark.', 'd. Informar de lo que has presenciado a tu supervisor o al director de recursos humanos.'], 'd. Informar de lo que has presenciado a tu supervisor o al director de recursos humanos.'),

  new Question('Roberta es la jefa del departamento de EZ Computers y contrata a Alex como asistente. Poco después de que Alex comience a trabajar en la compañía, Roberta le dice a Alex que la única forma de la que puede mantener su trabajo en EZ Computers es tener relaciones sexuales con ella. Alex está muy molesto con esta propuesta, pero acepta porque no quiere perder su trabajo. Debido a que Alex cedió a las demandas de Roberta, se trata de un caso de adultos con consentimiento mutuo, y no acoso sexual.', ['a. Verdadero', 'b. Falso'], 'b. Falso'),

  new Question('Una de las mejores maneras de detener el acoso sexual es simplemente ignorar al acosador.', ['a. Verdadero', 'b. Falso'], 'b. Falso'),

  new Question('Howie, un supervisor de servicios de instalaciones, cuelga un calendario con mujeres desnudas en su oficina. El calendario:', ['a. Se puede dejar a menos que alguien se queje', 'b. Puede contribuir a un ambiente de trabajo hostil', 'c.	Está protegido como libertad de expresión de acuerdo con la Primera Enmienda', 'd. No es asunto de nadie, más que de Howie. Si a alguien no le gusta, simplemente no debe ir a su oficina.'], 'b. Puede contribuir a un ambiente de trabajo hostil'),

  new Question('Decirle a un compañero de trabajo del sexo opuesto que tiene buen aspecto hoy constituye acoso sexual.', ['a. Verdadero', 'b. Falso'], 'b. Falso'),

  new Question('Shawna trabaja para la agencia Ace Modeling y uno de sus principales clientes la ha acosado sexualmente en un viaje de negocios. Shawna informó este comportamiento a su director, Jim, pero Jim le dijo a Shawna que aguantara el comportamiento, ya que el cliente dijo que abandonaría la relación si Shawna no trabajaba con él. Shawna renunció a su trabajo en la agencia cuando el comportamiento del cliente continuó.', ['a. Shawna tiene motivos para una denuncia por acoso sexual, ya que su director no tomó ninguna medida con respecto a su denuncia.', 'b. Dado que muchos clientes de su sector exigen este tipo de tratamiento, Shawna debería aprender a jugar a ese juego.', 'c. Shawna no tiene motivos para presentar una queja contra Ace Modeling, pero puede presentar una queja contra el cliente.', 'd. Dado que Shawna abandonó la agencia, no tiene derecho a presentar una queja por acoso sexual.'], 'a. Shawna tiene motivos para una denuncia por acoso sexual, ya que su director no tomó ninguna medida con respecto a su denuncia.')
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

  question.innerHTML = 'Pregunta ' + idx +') ' + quiz.questions[quiz.questionIndex].text;

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
  progress.innerHTML = 'Pregunta '+ (quiz.questionIndex+1) + ' /'+ quiz.questions.length;
}

function result(){
  var quiz_div = document.getElementById('quiz');

  var per = parseInt((quiz.score*100)/quiz.questions.length);

  var score = parseInt(quiz.score)

  var txt = '<h1 style="padding:0.5em;">Resultado</h1>' +'<span style="font-size: 35px">'+quiz.score + '/' + quiz.questions.length+'</span>'+ '<h1 id="score"">Tu puntuación: </h1>' +'<h1 class="score2"  style="padding-top:0;">'+per+'%</h1>';

  quiz_div.innerHTML = txt;

  if(score<11){
    txt += '<h2 ><a href="/fail1" style="color:red; font-size:40px; text-decoration: none;" >FAIL</a></h2>';
    txt += '<button type="button" class="btn btn-outline-secondary" onclick="location.href=\'/fail1\'" style="font-size:2rem;">OK</button>';
    quiz_div.innerHTML = txt;
    document.querySelector('.score2').style.color = "red";


  } else {
    txt += '<h2><a href="/pass1" style="color:green; font-size:40px; text-decoration: none;">PASS</h2>';
    txt += '<h1>Respuestas y explicaciones</h1>'
    txt += '<table class="table">'
    txt += '<tbody>'
    txt += '<thead> <tr>'+ '<th style="width: 250px;"> Pregunta </th>'+ '<th> Respuesta correcta </th>' + '<th> Tu respuesta </th>' + '<th> Controlar </th>' + '</tr> </thead>'
  
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
