@extends('layout.app')

@section('content')

<div class="container rekap">

    <section class="schedule-section section-padding" id="section_4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class=" mb-4 pt-5">List Pendaftar Reservasi</h2>
    
                        <div class="table-responsive">
                            <table class="schedule-table table table-light">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Nomor Identitas</th>
                                        <th scope="col">Tipe Kamar</th>
                                        <th scope="col">Tanggal Pesan</th>
                                        <th scope="col">Durasi Menginap</th>
                                        <th scope="col">Total Bayar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->nama }}</td>                     
                                            <td>{{ $item->jenis_kelamin }}</td>
                                            <td>{{ $item->nomor_identitas }}</td>                                                        
                                            <td>{{ $item->tipe_kamar }}</td>
                                            <td>{{ $item->tanggal_pesan }}</td>
                                            <td>{{ $item->durasi_menginap}}</td>
                                            <td>{{ $item->total_bayar}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="container">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Grafik Kamar yang dipesan</h5>
                
                                        <!-- Pie Chart -->
                                        <canvas id="pieChart" style="max-height: 400px;"></canvas>
                                        <script>
                                            var standar = {{ $standar }}
                                            var deluxe = {{ $deluxe }}
                                            var famiy = {{ $family }}
                                            document.addEventListener("DOMContentLoaded", () => {
                                                new Chart(document.querySelector('#pieChart'), {
                                                    type: 'pie',
                                                    data: {
                                                        labels: [
                                                            'Standar',
                                                            'Deluxe',
                                                            'Family'
                                                        ],
                                                        datasets: [{
                                                            label: 'jenis beasiswa',
                                                            data: [
                                                                standar,
                                                                deluxe,
                                                                famiy
                                                            ],
                                                            backgroundColor: [
                                                                'rgb(0, 0, 255)',
                                                                'rgb(0, 255, 0)',
                                                                'rgb(255, 0, 0)',
                                                            ],
                                                            hoverOffset: 4
                                                        }]
                                                    }
                                                });
                                            });
                                        </script>
                                        <!-- End Pie CHart -->
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

@endsection