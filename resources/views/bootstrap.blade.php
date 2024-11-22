<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertamina</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">


    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="{{ asset('assets/css/stylee.css') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="custom-style.css">


</head>

<body>
    <header class="navbar-container">
        <nav class="navbar navbar-expand-lg d-flex align-items-center">
            <div class="logo">
                <img src="{{ asset('assets/img/logo-pertamina.png') }}" alt="Pertamina">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse nav-list navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produk & Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>

            </div>
        </nav>

    </header>

    <main>
        <section class="hero">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <h1>Energi Untuk Kemajuan, Solusi Untuk Masa Depan</h1>
                            <p>Pertamina selalu berkomitmen tinggi untuk menyediakan berbagai produk energi andal dan
                                ramah
                                lingkungan untuk masyarakat Indonesia.</p>
                            <a href="#" class="button">Hubungi Kami</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    </div>
                </div>
        </section>

        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/img/about.jpg') }}" alt="About Us">
                    </div>
                    <div class="col-lg-6">
                        <h2>Tentang Kami</h2>
                        <p>Pertamina adalah perusahaan energi nasional yang berkomitmen untuk memberikan energi terbaik
                            bagi
                            Indonesia. Pertamina memiliki berbagai produk dan layanan yang dapat memenuhi kebutuhan
                            energi
                            masyarakat Indonesia.</p>
                        <a href="#" class="button">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
