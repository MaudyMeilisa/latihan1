<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($posts as $data)
        id : {{$data['id']}}
        judul : {{$data['title']}}
        content : <span> {{$data['content']}} </span>
        <hr>
        @endforeach
</ul>
</body>
</html>
