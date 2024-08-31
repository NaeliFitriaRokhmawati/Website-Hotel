@extends('layout.app')

@section('content')
    <div class="container pt-5">
        <div class="py-5">
            <h1 class="text-center my-3">
                Tentukan Pilihan <span class="text-success"> Kamarmu </span>
            </h1>
            <h5 class="text-center text-body-secondary">
                kami menawarkan tiga jenis kamar yang cocok untuk setiap preferensi dan kebutuhan.
                <br>Apapun pilihan Anda, kami siap menyambut Anda dengan pelayanan terbaik
            </h5>
            <div class="d-flex justify-content-between my-5">
                <div class="card shadow" style="width: 300px;">
                    <img src="{{ asset('assets/img/STANDAR.png') }}" class="card-img-top" width="300px" height="220px"
                        alt="...">
                    <div class="card-body text-center px-3 ">
                        <h5 class="card-title">Standard Room</h5>
                        <p class="card-text text-success">Rp200.000/malam</p>
                        <a href="#standar" class="btn btn-success d-block">Lihat Detail</a>
                    </div>
                </div>
                <div class="card shadow" style="width: 300px;">
                    <img src="{{ asset('assets/img/DELUXE.png') }}" class="card-img-top" width="300px" height="220px"
                        alt="...">
                    <div class="card-body text-center px-3 ">
                        <h5 class="card-title">Deluxe Room</h5>
                        <p class="card-text text-success">Rp500.000/malam</p>
                        <a href="#deluxe" class="btn btn-success d-block">Lihat Detail</a>
                    </div>
                </div>
                <div class="card shadow" style="width: 300px;">
                    <img src="{{ asset('assets/img/EXECUTIVE.png') }}" class="card-img-top" width="300px" height="220px"
                        alt="...">
                    <div class="card-body text-center px-3 ">
                        <h5 class="card-title">Executive Room</h5>
                        <p class="card-text text-success">Rp1.000.000/malam</p>
                        <a href="#executive" class="btn btn-success d-block">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="py-2">
        <div>
            <h1 class="py-3 text-center" id="standar">
                Detail <span class="text-success"> Kamar</span>
            </h1>

            <div>
                <div>

                    <div class="row mb-5 align-items-center" >
                        <div class="col-4">
                            <img src="{{ asset('assets/img/STANDAR.png') }}" width="300px" alt="">
                        </div>
    
                        <div class="col align-items-between">
                            <h2>Standard Room </h2>
                            <h3 class="text-success">Rp 200.000 </h3>
                            <h5>Nikmati keseimbangan sempurna antara kenyamanan dan nilai dengan kamar standar kami. Dengan
                                desain
                                yang sederhana namun menarik, kamar standar menyediakan tempat tidur yang nyaman, fasilitas
                                dasar,
                                dan kamar mandi pribadi untuk pengalaman menginap yang memuaskan.</h5>
                            <a href="reservasi">
                                <button type="button" class="btn btn-success" id="deluxe">Reservasi Sekarang</button>
                            </a>
                        </div>
    
                    </div>
                </div>

                <div class="row mb-5 align-items-center" >
                    <div class="col-4">
                        <img src="{{ asset('assets/img/DELUXE.png') }}" width="300px" alt="">
                    </div>
                    <div class="col align-items-between">
                        <h2>Deluxe Room </h2>
                        <h3 class="text-success">Rp 500.000 </h3>
                        <h5>Dapatkan sentuhan kemewahan pada perjalanan Anda dengan menginap di kamar Deluxe kami. Desain
                            yang elegan, tempat tidur yang mewah, fasilitas premium, dan kamar mandi yang luas akan membuat
                            Anda merasa seperti di istana pribadi Anda sendiri.</h5>
                        <a href="reservasi">
                            <button type="button" class="btn btn-success" id="executive">Reservasi Sekarang</button>
                        </a>

                    </div>


                </div>

                <div class="row mb-5 align-items-center"  >
                    <div class="col-4">
                        <img src="{{ asset('assets/img/EXECUTIVE.png') }}" width="300px" alt="">
                    </div>
                    <div class="col align-items-between">
                        <h2>Executive Room </h2>
                        <h3 class="text-success">Rp 1.000.000 </h3>
                        <h5>Jelajahi kemewahan dan kenyamanan yang luar biasa dengan menginap di kamar Executive kami.
                            Dengan ruang yang lapang, fasilitas eksklusif, dan kamar mandi mewah, kamar ini adalah pilihan
                            sempurna bagi tamu yang mencari pengalaman menginap yang istimewa dan tak terlupakan.</h5>
                        <a href="reservasi">
                            <button type="button" class="btn btn-success">Reservasi Sekarang</button>
                        </a>
                    </div>


                </div>

            </div>
        </div>


    </div>
@endsection
