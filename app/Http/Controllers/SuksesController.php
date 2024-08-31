<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservasi;

class SuksesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /**
     * Menampilkan data reservasi terbaru ke dalam view 'sukses'
     */
    public function index()
    {
        $data = reservasi::latest()->first(); // Mengambil data reservasi terbaru dari model Reservasi

        return view('sukses', ['data' => $data]); // Menampilkan view 'sukses' dengan data reservasi termasuk array assosiatif
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
