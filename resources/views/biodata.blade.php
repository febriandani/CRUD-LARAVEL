<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing data controller</title>
</head>
<body>
    <h1>Passind data dari controller</h1>
    <p>Nama : {{ $nama }}</p>
    <p>Mata Kuliah</p>
    <ul>
        @foreach ($matkul as $m)
        <li>{{ $m }}</li>

        @endforeach
    </ul>
</body>
</html>
