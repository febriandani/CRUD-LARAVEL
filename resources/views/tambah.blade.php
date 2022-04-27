<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>

    <a href="/pegawai">Kembali</a>
    <br>
    <br>

    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        Nama
        <input type="text" name="nama" required><br>
        Jabatan
        <input type="text" name="jabatan" required> <br>
        Umur
        <input type="number" name="umur" required> <br>
        Alamat
        <input type="text" name="alamat" required> <br>
        <input type="submit" value="Tambah">
    </form>

</body>
</html>
