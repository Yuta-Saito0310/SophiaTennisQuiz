<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>クイズ作成ページ</title>
    </head>
    <body>
        <h1>クイズ作成ページ</h1>
        <form action="/crud/index2021/store" method="POST" enctype="multipart/form-data" class="form">
            @csrf
            <div class="form-group">
                <div class="row">
                  <div class="col-6">
                    <label>カテゴリ<span class="attention">必須</span></label>
                    <select class="form-control" id="category" name="category_id">
                      @foreach ($categories as $category)
                      <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : '' }}>
                        {{ $category->name }}
                      </option>
                      @endforeach
                    </select>
                  </div>
                </div>
            </div>
            <div class="form-group">
                <label>問題文を入力<span class="attention">必須</span></label>
                <textarea cols="40" rows="3" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" placeholder="例）男子のセットボールに書かれているアルファベットは？">
                {{ old('title') }}
                </textarea>
                @if($errors->has('title'))
                <span class="invalid-feedback" role="alert">
                  {{ $errors->first('title') }}
                </span>
                @endif
             </div>
             <div class="form-group">
                <label>選択肢を入力<span class="attention">必須</span></label>
                <span>注意</span>
                <p>・同じ内容の選択肢は入力しないでください。<br>
                  ・クイズの答えは一番上に入力してください。<br>
                  ・カテゴリで選択したことに関するクイズを投稿すること。</p>
                <!-- correct -->
                <input type="text" class="form-control{{ $errors->has('correct') ? ' is-invalid' : '' }}" name="correct" value="{{ old('correct') }}" placeholder="答え）D">
                @if($errors->has('correct'))
                <span class="invalid-feedback" role="alert">
                  {{ $errors->first('correct') }}
                </span>
                @endif
                <!-- uncorrect1 -->
                <input type="text" class="form-control{{ $errors->has('uncorrect1') ? ' is-invalid' : '' }} mt-2" name="uncorrect1" value="{{ old('uncorrect1') }}" placeholder="選択肢1）S">
                @if($errors->has('uncorrect1'))
                <span class="invalid-feedback" role="alert">
                  {{ $errors->first('uncorrect1') }}
                </span>
                @endif
                <!-- uncorrect2 -->
                <input type="text" class="form-control{{ $errors->has('uncorrect2') ? ' is-invalid' : '' }} mt-2" name="uncorrect2" value="{{ old('uncorrect2') }}" placeholder="選択肢2）Y">
                @if($errors->has('uncorrect2'))
                <span class="invalid-feedback" role="alert">
                  {{ $errors->first('uncorrect2') }}
                </span>
                @endif
              </div>
              <!-- image -->
              <div class="form-group form-image-area">
                <label>画像挿入</label>
                <div class="form-image js-area-drop">
                  <i class="far fa-image fa-5x"></i>
                  <input type="file" class="form-control-file{{ $errors->has('image_name') ? ' is-invalid' : '' }} input-file" name="image_name">
                  <img class="prev-img" src="" style="@if(!(old('image_name'))) {{ 'display:none' }} @endif" alt="投稿画像">
                </div>
                @if($errors->has('image_name'))
                <span class="invalid-feedback" role="alert">
                  {{ $errors->first('image_name') }}
                </span>
                @endif
              </div>
              <!-- explain -->
              <div class="form-group">
                <label>解説を入力<span class="attention">必須</span></label>
                <textarea cols="40" rows="3" class="form-control{{ $errors->has('explain_sentence') ? ' is-invalid' : '' }}" name="explain_sentence" value="{{ old('explain_sentence') }}" placeholder="解説）解説を書きます">
                {{ old('explain_sentence') }}
                </textarea>
                @if($errors->has('explain_sentence'))
                <span class="invalid-feedback" role="alert">
                  {{ $errors->first('explain_sentence') }}
                </span>
                @endif
              </div>
              
            <button type="submit" class="btn btn-default btn-large">保存</button>
        </form>
        <div class="back">[<a href="/crud/index2021">back</a>]</div>
    </body>
</html>