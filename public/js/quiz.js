const explain_sentence = document.getElementsByClassName("explain_sentence");
const explain_sentence_Array = Array.from(explain_sentence);

const correctCircle = document.getElementsByClassName("correctCircle");
const correctCircle_Array = Array.from(correctCircle);

const uncorrectCircle = document.getElementsByClassName("uncorrectCircle");
const uncorrectCircle_Array = Array.from(uncorrectCircle);


const result = document.getElementById("result");
const result_score = document.getElementById("score");

const rechallenge = document.getElementById("rechallenge");

const quiz = document.getElementsByClassName("quizTitle");
const quiz_Array = Array.from(quiz);

const check_btn = document.getElementById('check_btn');
let score = 0;
function answerCheck(){for(let round=0; round<quiz.length; round++){
            let name = 'radio_' + round;
            let radioName = document.getElementsByName(name);
            let hiddenCorrect = document.getElementById("hiddenCorrect"+round).value;
            let checkValue = '';
            for(let select=0; select<3; select++){
                radioName[select].disabled = true;
                check_btn.disabled = true;
                 if(radioName[select].checked){
                     checkValue = radioName[select].value;
                     if(checkValue == hiddenCorrect){
                        correctCircle_Array[round].style.display="block";
                        explain_sentence_Array[round].style.display="block";
                        quiz_Array[round].style.color = '#fff'; 
                        quiz_Array[round].style.backgroundColor = '#73bbde'
                        score++;
                
                        }else{
                         uncorrectCircle_Array[round].style.display="block";
                         explain_sentence_Array[round].style.display="block";
                         quiz_Array[round].style.color = '#fff'; 
                        quiz_Array[round].style.backgroundColor = '#ec78ab'
                        }
                 }
            }
    }
    result_score.innerHTML = score + '/' + quiz.length;
    result.style.display = "block";
    rechallenge.style.display ="block";
    check_btn.style.display = "none";
}