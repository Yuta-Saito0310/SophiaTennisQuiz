<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>カテゴリーページ</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ secure_asset('css/category_page.css') }}">
    </head>
    <body>
        <div id="title-box">
            <div id="page-title">
                <h1>カテゴリーページ</h1>
            </div>
            <div id="page-explain">
                <p>ここでは挑戦するクイズのカテゴリーが選べます。画像ボタンを押してください。</p>
            </div>
        </div>
        <div id="category-names" class="pc">
            <h2 id ="pc-work" class="name">仕事</h2>
            <h2 id="pc-rule" class="name">審判</h2>
            <h2 id="pc-trivia" class="name">雑学</h2>
        </div>
        <div id="buttons">
            <!--PC画像-->
                <input type="image" src="/images/pc-images/pinkButton.png" onclick="location.href='/categories/2'" class="pc" >
                <input type="image" src="/images/pc-images/yellowButton.png" onclick="location.href='/categories/1'" class="pc" >
                <input type="image" src="/images/pc-images/greenButton.png" onclick="location.href='/categories/3'" class="pc" >
        </div>
        <div id="mobile-buttons" class="mobile">
            <h2 id="mobile-work" class="name">仕事</h2>
            <input type="image" src="/images/mobile-images/pinkButton.png" onclick="location.href='/categories/2'" class="mobile" >
            <div class="explanation">
                <p >1年生の仕事について出題します。</p>
            </div>
            
            <h2 id="mobile-rule" class="name">審判</h2>
            <input type="image" src="/images/mobile-images/yellowButton.png" onclick="location.href='/categories/1'" class="mobile">
            <div class="explanation">
                <p >リーグ戦の審判のルールや、テニスのルールについて出題します。</p>
            </div>
            
            <h2 id="mobile-trivia" class="name">雑学</h2>
            <input type="image" src="/images/mobile-images/greenButton.png" onclick="location.href='/categories/3'" class="mobile">
            <div class="explanation">
                <p >部活動とは一切関係ない雑学を出題します。暇潰しに使って下さい。</p>
            </div>
        </div>
        <div id="explanations" class="pc">
            <div class="explanation">
                <p >1年生の仕事について出題します。</p>
            </div>
            <div class="explanation">
                <p >リーグ戦の審判のルールや、テニスのルールについて出題します。</p>
            </div>
            <div class="explanation">
                <p >部活動とは一切関係ない雑学を出題します。暇潰しに使って下さい。</p>
            </div>
        </div>
        <div class="back">
            <a href="/">[TOPページへ]</a>
        </div>
    </body>
</html>