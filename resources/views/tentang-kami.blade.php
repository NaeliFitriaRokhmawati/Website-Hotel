@extends('layout.app')

@section('content')
    <div class="container py-5">
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
                        <video src="{{ asset('assets/img/video2.mp4') }}" controls autoplay width="490px" class="d-block ms-auto"></video>
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


    </div>
@endsection
