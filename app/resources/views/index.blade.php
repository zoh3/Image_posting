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
        <p class='create'>[<a href='/works/create'>新規投稿</a>]</p>
        <div class='works'>
            @foreach ($works as $work)
            <div class='work'>
                <a href='/works/{{ $work->id}}'><h2 class='作品名'>{{ $work->title }}</h2>{{ $work->title}}</a>
                
                <p>{{ $work->body }}</p>
                <img src='{{ $work->image }}' width='100px' height='100px'>
            </div>
            @endforeach
            
        </div>
        
    </body>
</html>
