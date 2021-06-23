<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>カテゴリー一覧</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>カテゴリー一覧</h1>
        <div class="create">[<a href="/crud/index2021/create">カテゴリーを作成する</a>]</div>
        <div class='posts'>
           
                <div class='allCategories'>
                    <table>
                        <tr>
                            <th scope="col">編集</th>
                            <th scope="col">問題文</th>
                        </tr>
                         @foreach ($categories as $category)
                        <tr>
                            <td class="edit_url"><a href="/crud/index2021/category/edit/{{$category->id}}">編集する</a></td>
                            <td>{{$category->name}}</td>
                        @endforeach
                        </tr>
                    </table>
                </div>
        </div>
    </body>
</html>