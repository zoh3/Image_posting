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
        <p class="edit">[<a href="/works/{{ $work->id }}/edit"]>編集</a></p>
        <div class="work">
            <h2 class="title">{{ $work->title }}</h2>
            <p class="body">{{ $work->body }}</p>
            <img src='{{ $work->image }}' width='100px' height='100px'>
            <p class="updated_at">{{ $work->updated_at }}</p>
        </div>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>
