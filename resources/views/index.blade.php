<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- TITLE -->
    <link rel="icon" href="{{ asset('assets/img/icon-pertamina.png') }}">
    <title>Pertamina</title>

    <!-- GOOGLE FONTS POPPINS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/styleee.css') }}">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light position-fixed w-100">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/logo-pertamina.png') }}" alt="Logo" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#">Karir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#">Investor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#">Tentang Kami</a>
                    </li>
                </ul>
                <div>
                    <button class="button-secondary">
                        Daftar
                    </button>
                    <button class="button-primary">
                        Masuk
                    </button>
                </div>
            </div>
        </div>
    </nav>

    {{-- SECTION HERO --}}
    <section class="hero" id="hero">
        <div class="container">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    <h1>Energi Untuk Kemajuan, Solusi Untuk Masa Depan</h1>
                    <p>Pertamina selalu berkomitmen tinggi untuk menyediakan berbagai produk energi andal dan
                        ramah
                        lingkungan untuk masyarakat Indonesia.</p>
                    <button class="hero-button">
                        Hubungi Kami
                    </button>
                </div>
            </div>
        </div>
    </section>
    {{-- SECTION HERO --}}

    {{-- SECTION BERITA --}}
    <section class="berita" id="berita">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('assets/img/berita-2.jpeg') }}" alt="gambar" class="img-fluid img-berita">
                </div>
                <div class="col-md-7 berita-content my-auto">
                    <h1>Mewujudkan Kedaulatan Energi hingga Pelosok Negeri</h1>
                    <p>
                        Pertamina berfokus pada pengembangan energi baru terbarukan dan energi terbarukan untuk
                        mendukung program
                        pemerintah dalam mewujudkan energi hingga pelosok negeri.
                    </p>
                    <button class="berita-button">
                        Lihat Lebih Lanjut
                    </button>
                </div>
            </div>
        </div>
    </section>
    {{-- SECTION BERITA --}}

    {{-- SECTION MENU --}}
    <section class="menu" id="menu">
        <div class="container">
            <div class="row">
                <div class="card col-md-3">
                    <div class="card-menu">
                        <img src="{{ asset('assets/img/menu-1.jpeg') }}" alt="menu" class="img-fluid img-menu">
                        <h1>Minyak Bumi</h1>
                        <p>
                            Pertamina memiliki produk minyak bumi yang berkualitas tinggi dan ramah lingkungan.
                            Produk minyak bumi Pertamina telah teruji dan terpercaya.
                        </p>

                    </div>
                    <button class="card-button">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
                <div class="card col-md-3">
                    <div class="card-menu">
                        <img src="{{ asset('assets/img/menu-1.jpeg') }}" alt="menu" class="img-fluid img-menu">
                        <h1>Minyak Bumi</h1>
                        <p>
                            Pertamina memiliki produk minyak bumi yang berkualitas tinggi dan ramah lingkungan.
                            Produk minyak bumi Pertamina telah teruji dan terpercaya.
                        </p>

                    </div>
                    <button class="card-button">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
                <div class="card col-md-3">
                    <div class="card-menu">
                        <img src="{{ asset('assets/img/menu-1.jpeg') }}" alt="menu" class="img-fluid img-menu">
                        <h1>Minyak Bumi</h1>
                        <p>
                            Pertamina memiliki produk minyak bumi yang berkualitas tinggi dan ramah lingkungan.
                            Produk minyak bumi Pertamina telah teruji dan terpercaya.
                        </p>

                    </div>
                    <button class="card-button">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
                <div class="card col-md-3">
                    <div class="card-menu">
                        <img src="{{ asset('assets/img/menu-1.jpeg') }}" alt="menu" class="img-fluid img-menu">
                        <h1>Minyak Bumi</h1>
                        <p>
                            Pertamina memiliki produk minyak bumi yang berkualitas tinggi dan ramah lingkungan.
                            Produk minyak bumi Pertamina telah teruji dan terpercaya.
                        </p>

                    </div>
                    <button class="card-button">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>

            </div>
        </div>
    </section>
    {{-- Section MENU --}}

    {{-- Section About Us --}}
    <section class="about" id="about">
        <div class="container">
            <div class="row about-content my-auto d-flex align-items-center justify-content-center">
                <div class="col-md-7">

                </div>
                <div class="col-md-5">
                    <h1>Tentang Kami</h1>
                    <p>
                        Pertamina adalah perusahaan energi nasional yang berkomitmen untuk memberikan energi terbaik
                        bagi
                        masyarakat Indonesia.
                    </p>
                    <button class="about-button">
                        Lihat Lebih Lanjut
                    </button>
                </div>
            </div>
        </div>
    </section>
    {{-- Section About Us --}}


    {{-- Section Career --}}
    <section class="career" id="career">
        <div class="container">
            <div class="row my-auto d-flex align-items-center justify-content-center">
                <div class="col-md-6 career-content">
                    <h1>Karir Pertamina</h1>
                    <p>
                        Pertamina membuka kesempatan bagi para talenta muda untuk bergabung dan berkembang bersama kami.
                    </p>
                    <button class="career-button">
                        Lihat Lebih Lanjut
                    </button>
                </div>
                <div class="img-grid col-md-6">
                    <div class="column">
                        <div class="row grid-top ">
                            <div class="col-md-6">
                                <img src="{{ asset('assets/img/berita-1.jpeg') }}" alt="career"
                                    class="img-fluid img-career">
                            </div>
                            <div class="col-md-6 ">
                                <img src="{{ asset('assets/img/berita-1.jpeg') }}" alt="career"
                                    class="img-fluid img-career">
                            </div>
                        </div>
                        <div class="row grid-bottom">
                            <div class="col-md-12">
                                <img src="{{ asset('assets/img/gambar-4.jpg') }}" alt="career" class="img-fluid">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Section Career --}}




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
