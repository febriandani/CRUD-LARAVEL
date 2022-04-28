<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit data</title>
</head>
<body>

<div class="container">
        <div class="card">
            <div class="card-body">


    <h2>Edit DATA pegawai</h2>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors-all() as $err)
                <li>{{ $err }}</li>

            @endforeach
        </ul>
    </div>
    @endif

    <br>
    <br>

    @foreach ($pegawai as $p)
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <input class="form-control" type="hidden" name="id" value="{{ $p->id }}">
        Nama
        <input class="form-control" type="text" required name="nama" value="{{ $p->nama }}"><br>
        Jabatan
        <input class="form-control" type="text" required name="jabatan" value="{{ $p->jabatan }}"><br>
        Umur
        <input class="form-control" type="number" required name="umur" value="{{ $p->umur }}"><br>
        Alamat
        <input class="form-control" type="text" required name="alamat" value="{{ $p->alamat }}"><br>
        <a class="btn btn-danger" href="/">Batal</a>
        <input class="btn btn-primary" type="submit" value="Simpan">

    </form>

    @endforeach


            </div>
        </div>
</div>
</body>
</html>
