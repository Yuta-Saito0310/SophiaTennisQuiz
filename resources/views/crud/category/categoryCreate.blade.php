<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>カテゴリー作成ページ</title>
    </head>
    <body>
        <h1>カテゴリー作成ページ</h1>
        <form action="/crud/index2021/category/store" method="POST" enctype="multipart/form-data" class="form">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="name" placeholder="カテゴリー名"/>
            </div>
            <button type="submit" class="btn btn-default btn-large">保存</button>
        </form>
        <div class="back">[<a href="/crud/index2021/category">back</a>]</div>
    </body>
</html>