@extends('layout.app')

@section('content')
    <div class="container py-5 ">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <h1 class="heading my-5">Data Terkirim!</h1>
                
                <h4 class="">Nama Pemesan : {{ $data->nama }}</h4>
                <h4 class="">Nomor Identitas : {{ $data->nomor_identitas }}</h4>
                <h4 class="">Jenis Kelamin : {{ $data->jenis_kelamin }}</h4>
                <h4 class="">Tipe Kamar : {{ $data->tipe_kamar }}</h4>
                <h4 class="">Durasi Menginap : {{ $data->durasi_menginap }}</h4>
                <!-- @if ($data->termasuk_breakfast = null)
    <h4 class="">Termasuk Breakfast : Tidak</h4>
@else
    <h4 class="">Termasuk Breakfast : Ya</h4>
    @endif -->
                @if ($data->durasi_menginap < 4)
                    <h4 class="">Diskon : Anda tidak mendapat diskon saat Durasi Menginap kurang dari 4 hari</h4>
                @else
                    <h4 class="">Diskon : 10%</h4>
                @endif
                <h4 class="">Total Bayar : {{ $data->total_bayar }}</h4>
                <a href="/"><button type="button" id="" class="btn btn-success mt-5">Kembali Ke
                        Beranda</button></a>

            </div>
        </div>
    </div>
@endsection
