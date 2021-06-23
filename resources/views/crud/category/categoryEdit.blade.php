<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>カテゴリー編集ページ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <form method="post" action="/crud/index2021/category/update/{{$category->id}}" enctype="multipart/form-data" class="form">
              @csrf
              @method('PUT')
              <div class="form-heading">
                <h1>カテゴリーの編集</h1>
              </div>
            
              <div class="form-group">
                <div class="update-date">最終更新日：<time>{{ $category->updated_at->format('Y/m/d') }}</time></div>
                <div class="row">
                  <div class="col-6">
                    <label>カテゴリ<span class="attention">必須</span></label>
                    <select class="form-control" id="category" name="id">
                      @foreach ($categories as $category)
                      <option value="{{ $category->id }}" {{ $category->id == old('id',$category->id) ? 'selected' : '' }}>
                        {{ $category->name }}
                      </option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>問題文を入力<span class="attention">必須</span></label>
                <textarea cols="40" rows="3" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="例）日本最西端の島はどこでしょう？">
                {{ old('name', $category->name) }}
                </textarea>
                @if($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                  {{ $errors->first('name') }}
                </span>
                @endif
              </div>
              
              <button type="submit" class="btn btn-default btn-large">編集</button>
        </form>
        <div class="back">[<a href="/crud/index2021/category">back</a>]</div>
    </body>
</html>