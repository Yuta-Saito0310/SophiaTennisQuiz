<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>クイズページ</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ secure_asset('css/quiz_page.css') }}">

    </head>
    <body>
        <div id="page-title">
                <h1>クイズページ</h1>
        </div>
        <form id=radioForm>
                
             @foreach($quizzes as $quiz)
             @php
              $quizArray = [];
                array_push($quizArray,$quiz->correct);
                array_push($quizArray,$quiz->uncorrect1);
                array_push($quizArray,$quiz->uncorrect2);
                shuffle($quizArray);
             @endphp
            <div class="quiz">
                <div class="correctCircle">
                    <img src="/images/pc-images/correctCircle.png" class="pc">
                    <img src="/images/mobile-images/correctCircle.png" class="mobile">
                </div>
                <div class="uncorrectCircle">
                    <img src="/images/pc-images/uncorrectCircle.png" class="pc">
                    <img src="/images/mobile-images/uncorrectCircle.png" class="mobile">
                </div>
                <div class="quizTitle">
                    <div class="quizNumber">
                        <p>問{{$loop->index+1}}</p>
                    </div>
                    <div class="quizSentence">
                        <p>{{$quiz->title}}</p>
                    </div>
                </div>
            </div>
            <div class="radioButtons">
                <input type="radio"   id="{{$quiz->id}} {{$quizArray[0]}}" class="radio-inline__input" name="radio_{{$loop->index}}" value="{{$quizArray[0]}}"　>
                <label class="radio-inline__label" for="{{$quiz->id}} {{$quizArray[0]}}">{{$quizArray[0]}}</label>
                    
                <input type="radio"  id="{{$quiz->id}} {{$quizArray[1]}}" class="radio-inline__input" name="radio_{{$loop->index}}" value="{{$quizArray[1]}}">
                <label class="radio-inline__label" for="{{$quiz->id}} {{$quizArray[1]}}">{{$quizArray[1]}}</label>
                    
                <input type="radio" id="{{$quiz->id}} {{$quizArray[2]}}"  class="radio-inline__input" name="radio_{{$loop->index}}" value="{{$quizArray[2]}}">
                <label class="radio-inline__label" for="{{$quiz->id}} {{$quizArray[2]}}">{{$quizArray[2]}}</label>
            </div>
                    
                <input type="hidden" id="{{"hiddenCorrect".$loop->index}}" value={{$quiz->correct}}>
                <div class="explain_sentence">
                    <p>{{$quiz->explain_sentence}}</p>
                </div>

             @endforeach
             <div id="result">
                 <p>あなたの正答率は<span id="score"></span>です</p>
             </div>
        
             
             <!--<div class=check>-->
             <!--   <input type="button" id="check_btn" value="確認" onclick="answerCheck();"> -->
             <!--</div>-->
             <div id="check">
                 <a href="#" onclick="javascript:answerCheck();" id="check_btn">採点する</a>
             </div>
             
             </form>
             <p class="back">[<a href="/categories">カテゴリーページへ</a>]</p>
             

    <script src="{{ secure_asset('/js/quiz.js') }}"></script>
    </body>
</html>