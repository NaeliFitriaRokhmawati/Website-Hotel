<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Greeny Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <nav class="navbar fixed-top shadow navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/logohotel.png') }}" alt="" width="200px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <div class="">
                    <ul class="navbar-nav">
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                        </li>
                        <li class="nav-item {{ Request::is('kamar*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('kamar') }}">Kamar</a>
                        </li>
                        <li class="nav-item {{ Request::is('tentang-kami') ? 'active' :'' }}">
                            <a class="nav-link" href="{{ route('tentang-kami') }}">Tentang Kami</a>
                        </li>
                        <li class="nav-item {{ Request::is('reservasi') ? 'active' :'' }} ">
                            <a class="nav-link" href="/reservasi">Reservasi</a>
                        </li>
                        <li class="nav-item {{ Request::is('rekap') ? 'active' :'' }} ">
                            <a class="nav-link" href="/rekap">Rekap</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>


    @yield('content')

    <footer class="bg-success py-4">
        <h5 class="text-center text-light">
            <i class="bi bi-c-circle"></i> 2024 All Rights Reserved I Greeny Hotel
        </h5>
    </footer>
</body>

</html>
