<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload data</title>
</head>
<body>

    <form action="/formulir/proses" method="POST">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

        Nama:
        <input type="text" name="nama"> <br>
        Alamat:
        <input type="text" name="alamat"> <br>
        <input type="submit" value="Simpan">
    </form>

</body>
</html>
