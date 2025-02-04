<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ini adalah halaman home</h1>
     <h3>selamat datang {{$nama}}, anda berada dikelas {{$kelas}}, tinggal di {{$alamat}}</h3>
     <h4>teman bang {{$nama}}</h4>
     <ol>
        @foreach($member as $mt)
        <li>{{$mt}}</li>
        @endforeach
     </ol>
</body>
</html>