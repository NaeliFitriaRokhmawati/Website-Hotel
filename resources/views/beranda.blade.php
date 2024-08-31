@extends('layout.app')

@section('content')
    <div class="container pt-5">

        {{-- hero --}}
        <div class="row align-items-center my-5">
            <div class="col ">
                <div class="">
                    <div class="d-flex flex-column">
                        <h1>Selamat Datang di Greeny Hotel</h1>
                        <h5 class="py-5">Tempat di mana kenyamanan bertemu dengan kehangatan, dan setiap pengalaman
                            menginap di sini
                            menjadi memori yang tak terlupakan.</h5>
                        <a href="/reservasi">
                            <button type="button" class="btn btn-success">Reservasi Sekarang <i
                                    class="bi bi-arrow-right"></i></button>

                        </a>
                    </div>
                </div>
            </div>

            <div class="col">
                <img src="{{ asset('assets/img/hero.png') }}" alt="" width="450px" class="d-block ms-auto">
            </div>
        </div>
        {{-- end hero --}}

        <hr class="my-5">

        {{-- plihan kamar --}}
        <div class="py-5">
            <h2 class="text-center my-3">
                Tentukan Pilihan <span class="text-success"> Kamarmu </span>
            </h2>
            <h5 class="text-center text-body-secondary">
                kami menawarkan tiga jenis kamar yang cocok untuk setiap preferensi dan kebutuhan.
                <br>Apapun pilihan Anda, kami siap menyambut Anda dengan pelayanan terbaik
            </h5>
            <div class="d-flex justify-content-between my-5 ">
                <div class="card shadow" style="width: 300px; pt-5">
                    <img src="{{ asset('assets/img/STANDAR.png') }}" class="card-img-top" width="300px" height="220px"
                        alt="...">
                    <div class="card-body text-center px-3 ">
                        <h5 class="card-title">Standard Room</h5>
                        <p class="card-text text-success">Rp200.000/malam</p>
                        <a href="/kamar#standar" class="btn btn-success d-block">Lihat Detail</a>
                    </div>
                </div>
                <div class="card shadow" style="width: 300px; pt-5">
                    <img src="{{ asset('assets/img/DELUXE.png') }}" class="card-img-top" width="300px" height="220px"
                        alt="...">
                    <div class="card-body text-center px-3 ">
                        <h5 class="card-title">Deluxe Room</h5>
                        <p class="card-text text-success">Rp500.000/malam</p>
                        <a href="/kamar#deluxe" class="btn btn-success d-block">Lihat Detail</a>
                    </div>
                </div>
                <div class="card shadow" style="width: 300px; pt-5">
                    <img src="{{ asset('assets/img/EXECUTIVE.png') }}" class="card-img-top" width="300px" height="220px"
                        alt="...">
                    <div class="card-body text-center px-3 ">
                        <h5 class="card-title">Executive Room</h5>
                        <p class="card-text text-success">Rp1.000.000/malam</p>
                        <a href="/kamar#executive" class="btn btn-success d-block">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- end --}}

        <hr class="my-5">

        <div class="row align-items-center py-5">
            <div class="col">
                <div class="">
                    <div class="d-flex flex-column">
                        <h1 class="">Tentang Kami,<span class="text-success"> Greeny Hotel</span></h1>
                        <h5 class=" py-5">Greeny Hotel, tempat di mana kenyamanan, keramahan, dan kemewahan
                            menyatu
                            dalam suasana yang
                            santai dan menyenangkan. Kami berkomitmen untuk memberikan pengalaman menginap yang istimewa
                            kepada setiap tamu, dengan staf yang ramah dan fasilitas modern yang dirancang untuk
                            memenuhi segala kebutuhan Anda.

                            Terletak di lokasi strategis dengan akses mudah ke berbagai atraksi wisata dan pusat bisnis,
                            Greeny Hotel adalah pilihan ideal untuk perjalanan bisnis atau liburan Anda. </h5>

                    </div>
                </div>
            </div>

            <div class="col">
                <img src="{{ asset('assets/img/tentangkami.png') }}" alt="" width="490px" class="d-block ms-auto">
            </div>
        </div>

        <div class="row align-items-center my-5">
            <div class="col">
                <div class="">
                    <div class="d-flex flex-column">
                        <img src="{{ asset('assets/img/tentangkami.png') }}" alt="" width="490px"
                            class="justify-content-start">
                    </div>
                </div>
            </div>

            <div class="col">
                <h1 class="my-5">Detail Informasi <span class="text-success"> Greeny Hotel</span></h1>


                <div class="my-3">
                    <h2 class="text-success">Alamat</h2>
                    <h5 class="text-secondary">Jl. Karangbolong No.10, Buayan, Kecamatan Buayan, Kabupaten Kebumen
                        Jawa Tengah, Indonesia. Kode Pos 54474</h5>
                </div>

                <div class="my-3">
                    <h2 class="text-success">Nomor Telepon</h2>
                    <h5 class="text-secondary">(+62) 831 031 888 17</h5>
                </div>

                <div class="my-3">
                    <h2 class="text-success">Email</h2>
                    <h5 class="text-secondary">info@greenyhotel.com</h5>
                </div>

            </div>
        </div>

        <hr class="my-5">
        <div>
            <div class="text-center py-3">
                <h2> Galeri Kamar <span class="text-success">Greeny Hotel</span></h2>
                <h6 class="text-secondary"> Jelajahi koleksi foto dan video kami dari Greeny Hotel, <br>di mana setiap
                    gambar dan klip adalah cerminan dari keindahan dan kenyamanan yang kami tawarkan.</h6>
            </div>

            <div id="carouselExampleIndicators" class="carousel slide carousel-fade">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <video src="{{ asset('assets/img/video1.mp4') }}" controls autoplay class="d-block w-100"></video>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/2.png') }}" class="d-block w-100 " height="500px" alt="...">
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/3.png') }}" class="d-block w-100"height="500px" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>


        <div class="row align-items-center py-5 my-5">
            <div class="col ">
                <img src="{{ asset('assets/img/reservasi.png') }}" alt="" width="400px"
                    class="justify-content-start">
            </div>
            <div class="col">
                <div class="">
                    <div class="d-flex flex-column">
                        <h1 class="">Buat Reservasimu</h1>
                        <h5 class=" py-5">Tunggu apa lagi? <br>
                            Segera buat reservasi Anda di Greeny Hotel dan nikmati pengalaman menginap yang istimewa!</h5>

                        <a href="/reservasi">
                            <button type="button" class="btn btn-success">Reservasi Sekarang <i
                                    class="bi bi-arrow-right"></i></button>
                    </div>

                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
