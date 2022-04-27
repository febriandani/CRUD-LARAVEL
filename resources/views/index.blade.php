<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data pegawai from database</title>
</head>
<body>

    <style>
        .pagination li{
            float: left;
            list-style-type: none;
            margin: 5px;
        }
    </style>

    <div class="container">
        <div class="card">
            <div class="card-body">


    <h2>Data pegawai</h2>
    <!-- <a href="/pegawai/tambah"> + Tambah data baru</a> -->
    <div class="input-group mb-3">

  <a class="btn btn-outline-secondary" href="/pegawai/tambah">Tambah data baru</a>
</div>


    <br>
    <br>

    <form action="/pegawai/cari" method="get" class="form-inline">
        <div class="input-group mb-3">
            <input class="form-control" type="text" name="cari" placeholder="Cari pegawai ..." value="{{ old('cari') }}">
            <input class="btn btn-primary" type="submit" value="Cari">
        </div>
    </form>


    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th colspan="2">Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->jabatan }}</td>
            <td>{{ $p->umur }}</td>
            <td>{{ $p->alamat }}</td>
            <td><a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->id }}">Edit</a></td>
            <td><a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->id }}">Hapus</a></td>
        </tr>

        @endforeach
    </table>

    <br>
    Halaman : {{ $pegawai->currentPage() }} <br>
    Jumlah data : {{ $pegawai->total() }} <br>
    Data perhalaman : {{ $pegawai->perPage() }} <br>

    {{ $pegawai->links('pagination::bootstrap-5') }}


    </div>
        </div>
    </div>
</body>
</html>
