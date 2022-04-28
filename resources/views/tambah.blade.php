<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tambah data</title>
</head>
<body>

<div class="container">
        <div class="card">
            <div class="card-body">


    <h2>Tambah DATA pegawai</h2>
    <br>
    <br>

    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        Nama
        <input class="form-control" type="text" name="nama" required><br>
        Jabatan
        <input class="form-control" type="text" name="jabatan" required> <br>
        Umur
        <input class="form-control" type="number" name="umur" required> <br>
        Alamat
        <textarea class="form-control" type="text" name="alamat" required> </textarea> <br>
        <a class="btn btn-danger" href="/">Batal</a>
        <input class="btn btn-primary" type="submit" value="Tambah">
    </form>

</body>
</html>
