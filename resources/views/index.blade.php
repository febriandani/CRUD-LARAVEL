<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data pegawai from database</title>
</head>
<body>
    <h2>Data pegawai</h2>
    <a href="/pegawai/tambah"> + Tambah data baru</a>
    <br>
    <br>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th colspan="2">Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->jabatan }}</td>
            <td>{{ $p->umur }}</td>
            <td>{{ $p->alamat }}</td>
            <td><a href="/pegawai/edit/{{ $p->id }}">Edit</a></td>
            <td><a href="/pegawai/hapus/{{ $p->id }}">Hapus</a></td>
        </tr>

        @endforeach
    </table>


</body>
</html>
