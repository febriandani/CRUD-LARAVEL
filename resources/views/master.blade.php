<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <header>
        <h2>Blog Febri</h2>
        <nav>
            <a href="/blog">Home</a>
            <a href="/blog/tentang">Tentang</a>
            <a href="/blog/kontak">Kontak</a>
        </nav>
    </header>
    <hr>
    <br>
    <br>

    <!-- bagian judul -->
    <h3> @yield('judul_halaman') </h3>

    <!-- bagian konten -->
    @yield('konten')

    <br>
    <br>
    <hr>
    <footer>
        <p>&copy; <a href="www.instagram.com/febriandani">MuhammadFebriAndani 2022</a></p>
    </footer>
</body>
</html>
