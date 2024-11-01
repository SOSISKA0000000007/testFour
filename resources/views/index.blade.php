<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .advertisements{
        display: flex;
        flex-wrap: wrap;
        width: 150px;
        border: solid 2px;
    }
</style>
<body>
    @foreach($posts as $post)
        <div class="advertisements">
            <p>{{$post->firstname}}</p>
            <p>{{$post->lastname}}</p>
            <p>{{$post->phonenumber}}</p>
            <p>{{$post->created_at}}</p>
        </div>
    @endforeach
    <div>

    </div>
</body>
</html>
