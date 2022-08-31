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
        <form action="/works" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="title">
                <h2>作品名</h2>
                <input type="text" name="work[title]" placeholder="タイトル"/>
            </div>
            
            <dev class="image">
                <input type="file" name="image">
            </dev>
            
            <div class="body">
                <h2>コメント</h2>
                <textarea name="work[body]" placeholder="コメント"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="戻る">[<a href="/">戻る</a>]</div>
    </body>
</html>
