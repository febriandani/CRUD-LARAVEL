<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
</head>
<body>
    <h2>Edit adta pegawai</h2>
    <br>
    <br>

    @foreach ($pegawai as $p)
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->id }}">
        Nama
        <input type="text" required name="nama" value="{{ $p->nama }}"><br>
        Jabatan
        <input type="text" required name="jabatan" value="{{ $p->jabatan }}"><br>
        Umur
        <input type="number" required name="umur" value="{{ $p->umur }}"><br>
        Alamat
        <input type="text" required name="alamat" value="{{ $p->alamat }}"><br>
        <input type="submit" value="Simpan">

    </form>

    @endforeach
</body>
</html>
