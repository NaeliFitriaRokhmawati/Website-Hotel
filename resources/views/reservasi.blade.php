@extends('layout.app')

@section('content')
    <div class="container" style="margin-top: 100px; ">
        <h1 class=""> Form <span class="text-success">Reservasi</span></h1>

        <form class="py-2" method="POST" action="{{ route('reservasi.store') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Pemesan</label>
                <input type="text" class="form-control shadow-sm" id="nama" name="nama">
                <div class="errors text-danger" style="font-size: 14px">
                    {{ $errors->reservasi->first('nama') }}</div>
            </div>

            <div class="mb-3">
                <label for=""> Jenis Kelamin</label>
                <div class="d-flex gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" id="jenis_kelamin" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" id="jenis_kelamin">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Perempuan
                        </label>
                    </div>
                </div>
                <div class="errors text-danger" style="font-size: 14px">
                    {{ $errors->reservasi->first('jenis_kelamin') }}</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor Identitas</label>
                <input type="number" class="form-control shadow-sm" id="nomor_identitas" name="nomor_identitas"
                    oninput="cekNomorIdentitas()">
                <div class=" errors text-danger" hidden id="nomor_identitas_error"> isian salah..data harus 16 digit</div>
            </div>

            <div class="mb-3">
                <label for="">Tipe Kamar</label>

                <select class="form-select shadow-sm" id="tipe_kamar" name="tipe_kamar" required oninput="cekForm()">
                    <option selected>Pilih Kamar</option>
                    @foreach ($data as $kamar)
                        <option value="{{ $kamar->tipe_kamar }}">{{ $kamar->tipe_kamar }}</option>
                    @endforeach
                </select>

                <div class="errors text-danger" style="font-size: 14px">
                    {{ $errors->reservasi->first('tipe_kamar') }}</div>

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga</label>
                <input type="number" class="form-control shadow-sm" id="harga" name="harga" readonly>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Pesan</label>
                <input type="date" class="form-control shadow-sm" id="tanggal_pesan" name="tanggal_pesan">
                <div class="errors text-danger" style="font-size: 14px">
                    {{ $errors->reservasi->first('tanggal_pesan') }}</div>

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Durasi Menginap</label>
                <input type="number" class="form-control shadow-sm" id="durasi_menginap" name="durasi_menginap"
                    oninput="cekForm()">

                <div class="errors text-danger" style="font-size: 14px">
                    {{ $errors->reservasi->first('durasi_menginap') }}</div>

            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input shadow-lg" id="termasuk_breakfast" name="termasuk_breakfast">
                <label class="form-check-label" for="exampleCheck1">Termasuk Breakfast</label>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Total Bayar</label>
                <input type="text" class="form-control shadow-sm" id="total_bayar" name="total_bayar" readonly>
            </div>
            <div class="mb-5">

                <button type="button" class="btn btn-success" id="hitungBtn" style="width: 300px"
                    onclick="hitungTotalBayar()" disabled>Hitung Total Bayar</button>
                <button type="submit" class="btn btn-success" id="submitBtn" disabled>Simpan</button>
                <button type="Reset" class="btn btn-success">Cancel</button>
            </div>


        </form>

    </div>

    <script>
        // Fungsi untuk menghitung total bayar berdasarkan harga kamar, durasi menginap, dan opsi termasuk breakfast
        function hitungTotalBayar() {
            // Inisialisasi variabel hargaKamar dengan nilai awal 0
            var hargaKamar = 0;
            // Mengambil nilai durasi menginap dari input dengan id 'durasi_menginap' dan mengubahnya menjadi integer
            var durasiMenginap = parseInt(document.getElementById('durasi_menginap').value);
            // Mengambil status checkbox termasuk breakfast
            var termasukBreakfast = document.getElementById('termasuk_breakfast').checked;

            // Mengambil nilai tipe kamar dari input dengan id 'tipe_kamar' dan menyimpannya ke dalam variabel tipeKamar
            var tipeKamar = document.getElementById('tipe_kamar').value;
            switch (tipeKamar) {
                case 'Standard':
                    // Jika tipe kamar adalah 'Standard', set hargaKamar ke 250000
                    hargaKamar = 200000;
                    break;
                case 'Deluxe':
                    // Jika tipe kamar adalah 'Deluxe', set hargaKamar ke 500000
                    hargaKamar = 500000;
                    break;
                case 'Executive':
                    // Jika tipe kamar adalah 'Executive', set hargaKamar ke 1000000
                    hargaKamar = 1000000;
                    break;
            }

            // Menghitung total bayar berdasarkan harga kamar, durasi menginap, dan opsi termasuk breakfast
            var totalBayar = hargaKamar * durasiMenginap;
            // Menerapkan diskon 10% jika durasi menginap lebih dari 3 hari
            if (durasiMenginap > 3) {
                totalBayar *= 0.9; // diskon 10%
                // totalBayar = ((hargaKamar * 0.9) * durasiMenginap )+ (durasiMenginap * 80000);
                // totalBayar += 80000;
            }

            if (termasukBreakfast) {
                totalBayar += durasiMenginap * 80000
            }

            document.getElementById('total_bayar').value = totalBayar
        .toLocaleString(); // Menampilkan harga dengan format rupiah


            // Mengaktifkan tombol submit jika total bayar sudah terisi
            document.getElementById('submitBtn').disabled = false;
        }

        // Fungsi untuk memeriksa apakah tipe kamar dan durasi menginap sudah terisi
        function cekForm() {
            var tipeKamar = document.getElementById('tipe_kamar').value;
            var durasiMenginap = document.getElementById('durasi_menginap').value;

            // Menonaktifkan tombol hitung jika tipe kamar atau durasi menginap belum terisi 
            if (tipeKamar === '' || durasiMenginap === '') {
                document.getElementById('hitungBtn').disabled = true;
            } else {
                document.getElementById('hitungBtn').disabled = false;
            }
        }

        // Fungsi untuk memeriksa nomor identitas yang dimasukkan
        function cekNomorIdentitas() {
            var nomorIdentitas = document.getElementById('nomor_identitas').value;

            // Munculkan pesan error jika nomor identitas tidak memiliki 16 digit atau bukan angka
            if (nomorIdentitas.length !== 16 || isNaN(nomorIdentitas)) {
                document.getElementById('nomor_identitas_error').hidden = false;
            } else {
                document.getElementById('nomor_identitas_error').hidden = true;
            }
        }

        document.getElementById('tipe_kamar').addEventListener('change', function() {
            var tipeKamar = this.value;
            var harga;

            switch (tipeKamar) {
                case 'Standard':
                    harga = 200000;
                    break;
                case 'Deluxe':
                    harga = 500000;
                    break;
                case 'Executive':
                    harga = 1000000;
                    break;
                default:
                    harga = 0; // Harga default jika tipe kamar tidak valid
                    break;
            }

            document.getElementById('harga').value = harga; // Menampilkan harga dengan format rupiah
        });
    </script>
@endsection
