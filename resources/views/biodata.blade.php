<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ini adalah halaman biodata</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>nama</th>
            <th>kelas</th>
        </tr>
        @foreach ($biodata as $b)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$b['nama']}}</td>
            <td>{{$b['kelas']}}</td>
        </tr>
            @endforeach
    </table>
</body>
</html>