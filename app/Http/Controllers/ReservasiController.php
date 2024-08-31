<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\Reservasi;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /**
     * Menampilkan daftar semua jenis kamar ke dalam view 'reservasi'
     */
    public function index()
    {
        $data = Kamar::all(); // Mengambil semua data jenis kamar dari model Kamar
        return view('reservasi', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
     * Menyimpan data reservasi baru ke dalam database setelah melewati validasi
     */
    public function store(Request $request)
    {
        // Membuat validasi data reservasi
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required',
            'nomor_identitas' => 'required|numeric|digits:16',
            'tipe_kamar' => 'required',
            'tanggal_pesan' => 'required|date',
            'durasi_menginap' => 'required|numeric|min:1',
        ]);

        // Jika validasi gagal, redirect kembali ke halaman pendaftaran dengan pesan error
        if ($validator->fails()) {
            return redirect()->route('reservasi.index')->withErrors($validator, 'reservasi');
        }

        // Menyimpan data reservasi ke dalam database
        Reservasi::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomor_identitas' => $request->nomor_identitas,
            'tipe_kamar' => $request->tipe_kamar,
            'tanggal_pesan' => $request->tanggal_pesan,
            'durasi_menginap' => $request->durasi_menginap,
            'termasuk_breakfast' => $request->termasuk_breakfast,
            'total_bayar' => $request->total_bayar,
        ]);

        // Redirect kembali ke halaman sukses dengan pesan sukses
        return redirect()->route('sukses.index')->with('success', 'Data terkirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
