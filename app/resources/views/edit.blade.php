<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>イラスト投稿サイト</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

       
    </head>
    <body>
        <h1>イラスト投稿サイト</h1>
        <form action="/works/{{ $work->id }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="title">
                <h2>作品名</h2>
                <input type="text" name="work[title]" placeholder="タイトル"　value="{{ $work->title }}"/>
                <p class="title_error" style="color:red">{{$errors->first('post.title')}}</p>
            </div>
            
            <dev class="image">
                <p>{{ $work->body }}</p>
                <img src='{{ $work->image }}' width='100px' height='100px'>
            </dev>
            
            <div class="body">
                <h2>コメント</h2>
                <textarea name="work[body]" placeholder="コメント">{{ $work->body}}</textarea>
                <p class="title_error" style="color:red">{{$errors->first('post.body')}}</p>
            </div>
            <input type="submit" value="更新"/>
        </form>
        <div class="戻る">[<a href="/works/{{ $work->id }}">戻る</a>]</div>
    </body>
</html>
