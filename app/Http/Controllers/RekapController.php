<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservasi;

class RekapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = reservasi::all(); // Mengambil data reservasi terbaru dari model Reservasi
        $standar = reservasi::where('tipe_kamar', 'Standar')->count(); 
        $deluxe = reservasi::where('tipe_kamar', 'Deluxe')->count();
        $family = reservasi::where('tipe_kamar', 'Family')->count();

        return view('rekap', ['data' => $data, 'standar' => $standar, 'deluxe' => $deluxe, 'family' => $family]); // Menampilkan view 'sukses' dengan data reservasi
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
    public function store(Request $request)
    {
        //
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