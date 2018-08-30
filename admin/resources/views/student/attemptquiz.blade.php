@include('student/header')
<br><br>

<style type="text/css">
	@import url(https://fonts.googleapis.com/css?family=Work+Sans:300,600);

body{
	font-size: 20px;
	font-family: 'Work Sans', sans-serif;
	color: #333;
  font-weight: 300;
  text-align: center;
  background-color: #f8f6f0;
}
h1{
  font-weight: 300;
  margin: 0px;
  padding: 10px;
  font-size: 20px;
  background-color: #444;
  color: #fff;
}
.question{
  font-size: 30px;
  margin-bottom: 10px;
}
.answers {
  margin-bottom: 20px;
  text-align: left;
  display: inline-block;
}
.answers label{
  display: block;
  margin-bottom: 10px;
}
button{
  font-family: 'Work Sans', sans-serif;
	font-size: 22px;
	background-color: #279;
	color: #fff;
	border: 0px;
	border-radius: 3px;
	padding: 20px;
	cursor: pointer;
	margin-bottom: 20px;
}
button:hover{
	background-color: #38a;
}





.slide{
  position: absolute;
  left: 0px;
  top: 0px;
  width: 100%;
  z-index: 1;
  opacity: 0;
  transition: opacity 0.5s;
}
.active-slide{
  opacity: 1;
  z-index: 2;
}
.quiz-container{
  position: relative;
  height: 200px;
  margin-top: 40px;
}

</style>

 <div class="page-content-wrapper">
                
                <div class="" style="padding: 20px;">
                    
                    <h1>Quiz on {{ $data->name }} <p style="font-size: 20px;" id="count"><span id="minutes"></span> : <span id="seconds"></span></p></h1>

				<div class="quiz-container">
				  <div id="quiz"></div>
				</div>
				<br><br>
				<button id="previous">Previous Question</button>
				<button id="next">Next Question</button>
				<button id="submit">Submit Quiz</button>
				<div id="results"></div>

                   
                    </div>

                    <form action="{{ url('QuizSubmit') }}" method="POST" id="myForm">
                        
                        <input type="hidden" name="quiz_id" value="{{ $data->id }}">
                        <input type="hidden" name="student_id" value="{{ Session::get('UserID') }}"> 
                    	<input type="hidden" name="score" value="" id="score">
                    	<input type="hidden" name="questions" value="" id="totalquestion">
                    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                    	
                    </form>
                <!-- end page content -->
          
            </div>


<script>
	//alert(localStorage.getItem("minutes"));
if(localStorage.getItem("seconds") == 0 || localStorage.getItem("seconds") == '' || localStorage.getItem("seconds") == 'undefined')
{
 minutes = 00;
 seconds = 00;
}
else
{	
 minutes = localStorage.getItem("minutes");
 seconds = localStorage.getItem("seconds");
} 
var interval = setInterval(function(){
  localStorage.setItem("minutes",minutes);
  localStorage.setItem("seconds",seconds);	
  //alert(localStorage.getItem("seconds"));
  document.getElementById('minutes').innerHTML=minutes;
  document.getElementById('seconds').innerHTML=seconds;
  seconds++;
   if(seconds == 60)
   {
   	minutes++;
   	seconds = 0;
   }
   if (minutes == 20)
   {
    clearInterval(interval);
    document.getElementById('count').innerHTML='Done';
    document.getElementById("submit").click();
    //alert("You're out of time!");
   }
}, 1000);

</script>

<script type="text/javascript">
        
	(function() {
  const myQuestions = [
   <?php
    
    foreach ($questions as $key => $question) 
    { ?>
    
     {
      question: "{{ $question->question }}",
      answers: {
        a: "{{ $question->option1 }}",
        b: "{{ $question->option2 }}",
        c: "{{ $question->option3 }}",
        d: "{{ $question->option4 }}"
      },
      correctAnswer: "{{ $question->correct_option }}"
    },	 


   <?php  }

   ?>
  ];

  function buildQuiz() {
    // we'll need a place to store the HTML output
    const output = [];

    // for each question...
    myQuestions.forEach((currentQuestion, questionNumber) => {
      // we'll want to store the list of answer choices
      const answers = [];

      // and for each available answer...
      for (letter in currentQuestion.answers) {
        // ...add an HTML radio button
        answers.push(
          `<label>
             <input type="radio" name="question${questionNumber}" value="${letter}">
              ${letter} :
              ${currentQuestion.answers[letter]}
           </label>`
        );
      }

      // add this question and its answers to the output
      output.push(
        `<div class="slide">
           <div class="question"> ${currentQuestion.question} </div>
           <div class="answers"> ${answers.join("")} </div>
         </div>`
      );
    });

    // finally combine our output list into one string of HTML and put it on the page
    quizContainer.innerHTML = output.join("");
  }

  function showResults() {
    // gather answer containers from our quiz
    const answerContainers = quizContainer.querySelectorAll(".answers");

    // keep track of user's answers
    let numCorrect = 0;

    // for each question...
    myQuestions.forEach((currentQuestion, questionNumber) => {
      // find selected answer
      const answerContainer = answerContainers[questionNumber];
      const selector = `input[name=question${questionNumber}]:checked`;
      const userAnswer = (answerContainer.querySelector(selector) || {}).value;

      // if answer is correct
      if (userAnswer === currentQuestion.correctAnswer) {
        // add to the number of correct answers
        numCorrect++;

        // color the answers green
        answerContainers[questionNumber].style.color = "lightgreen";
      } else {
        // if answer is wrong or blank
        // color the answers red
        answerContainers[questionNumber].style.color = "red";
      }
    });

    // show number of correct answers out of total
    resultsContainer.innerHTML = `${numCorrect} out of ${myQuestions.length}`;
    document.getElementById('score').value = numCorrect;
    document.getElementById('totalquestion').value = myQuestions.length;
    localStorage.removeItem("minutes",minutes);
    localStorage.removeItem("seconds",seconds);
    document.getElementById("myForm").submit();
    //alert(numCorrect);
  }

  function showSlide(n) {
    slides[currentSlide].classList.remove("active-slide");
    slides[n].classList.add("active-slide");
    currentSlide = n;
    
    if (currentSlide === 0) {
      previousButton.style.display = "none";
    } else {
      previousButton.style.display = "inline-block";
    }
    
    if (currentSlide === slides.length - 1) {
      nextButton.style.display = "none";
      submitButton.style.display = "inline-block";
    } else {
      nextButton.style.display = "inline-block";
      submitButton.style.display = "none";
    }
  }

  function showNextSlide() {
    showSlide(currentSlide + 1);
  }

  function showPreviousSlide() {
    showSlide(currentSlide - 1);
  }

  const quizContainer = document.getElementById("quiz");
  const resultsContainer = document.getElementById("results");
  const submitButton = document.getElementById("submit");

  // display quiz right away
  buildQuiz();

  const previousButton = document.getElementById("previous");
  const nextButton = document.getElementById("next");
  const slides = document.querySelectorAll(".slide");
  let currentSlide = 0;

  showSlide(0);

  // on submit, show results
  submitButton.addEventListener("click", showResults);
  previousButton.addEventListener("click", showPreviousSlide);
  nextButton.addEventListener("click", showNextSlide);
})();

</script>
@include('student/footer')