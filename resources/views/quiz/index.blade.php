<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <title>SophiaTennisQuiz</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ secure_asset('css/index_page.css') }}">
    </head>
<body>
  <!-- header -->
  <!--パソコン用のヘッダー-->
      <header class="pc">
          <h1 class="menu-title">
              SOPHIA TENNIS QUIZ
          </h1>
          <nav class="navigation">
              <ul class="nav-list">
                  <li class="menu-item"><a href="#about-quiz">クイズの概要</a></li>
                  <li class="menu-item"><a href="#quiz-function">クイズの機能紹介</a></li>
                  <li class="menu-item"><a href="#news">お知らせ</a></li>
                  <li class="menu-item"><a href="/categories">クイズに挑戦</a></li>
              </ul>
        　</nav>
      </header>
    <!--スマホ用のヘッダー-->
    　<!--<header class="mobile">-->
    　<!--    <p class="menu-title">-->
    　<!--        SOPHIA TENNIS QUIZ-->
    　<!--    </p>-->
    　<!--</header>-->
    <!--ハンバーガーメニュー-->
   <!--   <div id="navArea" class="mobile">-->

   <!--       <nav>-->
   <!--         <div class="inner">-->
   <!--           <ul>-->
   <!--             <li><a href="#about-quiz">クイズの概要</a></li>-->
   <!--             <li><a href="#quiz-function">クイズの機能</a></li>-->
   <!--             <li><a href="#news">お知らせ</a></li>-->
   <!--           </ul>-->
   <!--         </div>-->
   <!--       </nav>-->
        
   <!--       <div class="toggle_btn">-->
   <!--         <span></span>-->
   <!--         <span></span>-->
   <!--         <span></span>-->
   <!--       </div>-->
        
   <!--       <div id="mask"></div>-->

　　　<!--</div>-->
      <div class="header-Separated"></div>
      <main>
          <div id="tennisCort">
              <image src="/images/pc-images/tennisCort.png" id="pc-tennisCort" class="pc">
              <image src="/images/mobile-images/tennisCort.png" id="mobile-tennisCort" class="mobile">
          </div>
          <article>
              <div id="challengeImage">
                  <input type="image" src="/images/pc-images/challenge.png" onclick="location.href='/categories'" class="pc">
                  <input type="image" src="/images/mobile-images/challenge.png" onclick="location.href='/categories'" class="mobile">
              </div>
          
              <section id="about-quiz">
                  <div id="about-quiz-content">
                      <h1 id="quiz-content-title">Sophia Tennis Quizって何？</h1>
                      <p id="quiz-explain">上智硬式庭球部クイズ(Sophia Tennis Quiz)は、「部活動のルールを気軽に確認できる！」そんな趣旨で作られたWebページです。「ルールがまだ覚えられてない」、「久しぶりの練習の前に軽く確認したい」、そんなときに利用してみて下さい。</p>
                  </div>
              </section>
              <section id="quiz-function">
                  <div id="quiz-function-content">
                      <h1 id="functions-explain">クイズの機能</h1>
                      <li class="Function">
                          <img src="/images/pc-images/greenFunction.png" class="pc">
                          <img src="/images/mobile-images/greenFunction.png" class="mobile">
                          <h2 class="function1">3択クイズ</h2>
                          <p class="function-explain">Sophia Tennis Quizの問題は3択式で出題されます。</p>
                      </li>
                      <li class="Function">
                          <img src="/images/pc-images/yellowFunction.png" class="pc">
                          <img src="/images/mobile-images/yellowFunction.png" class="mobile">
                          <h2 class="function2">ランダム出題</h2>
                          <p class="function-explain">Sophia Tennis Quizの問題はカテゴリー別にランダムで出題されます。</p>
                      </li>
                      <li class="Function">
                          <img src="/images/pc-images/pinkFunction.png" class="pc" >
                          <img src="/images/mobile-images/pinkFunction.png" class="mobile" >
                          <h2 class="function3">気になった問題を保存(実装予定)</h2>
                          <p class="function-explain">間違えた問題など、気になった問題を後から解き直せるようにしたいと思っています。</p>
                      </li>
                  </div>
              </section>
          </article>
      </main>
</body>

</html>