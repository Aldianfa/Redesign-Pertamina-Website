<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertamina</title>

    <!-- FONT QUICKSAND -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <header class="navbar-container">
        <div class="logo">
            <img src="{{ asset('assets/img/logo-pertamina.png') }}" alt="Pertamina">
        </div>
        
        <nav class="nav-list">
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Produk & Layanan</a></li>
                <li><a href="#">Berita</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Energi Untuk Kemajuan, Solusi Untuk Masa Depan</h1>
            <p>Pertamina selalu berkomitmen tinggi untuk menyediakan berbagai produk energi andal dan ramah lingkungan
                untuk masyarakat Indonesia.</p>
            <a href="#" class="button">Hubungi Kami</a>
        </div>
    </section>
</body>

</html>
