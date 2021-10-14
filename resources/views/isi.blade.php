<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isi</title>
</head>
<body>
<ul>
       <br> @foreach ($posts as $data)
       <br>id : {{$data['id']}}
       <br> nama : {{$data['name']}}
       <br> username : {{$data['username']}}
       <br> email : {{$data['email']}}
       <br> alamat :  {{$data['alamat']}}
       <br> Mata Pelajaran :
       @foreach ($data ['mapel'] as $mapel)
       <li> {{$mapel}}</li>
       @endforeach

        <hr>
        @endforeach
</body>
</html>
