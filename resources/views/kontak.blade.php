<!-- menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
@section('judul_halaman', 'Halamana kontak')

<!-- isi bagian konten -->
@section('konten')

<p>ini adalah halaman kontak</p>
<table border="1">
    <tr>
        <td>Email</td>
        <td>:</td>
        <td>Febriandani176@gmail.com</td>
    </tr>
    <tr>
        <td>Hp</td>
        <td>:</td>
        <td>0895-3312-7634-6</td>
    </tr>
</table>

@endsection
