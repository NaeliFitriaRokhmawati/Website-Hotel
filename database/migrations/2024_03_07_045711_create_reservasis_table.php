<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->bigInteger('nomor_identitas')->unsigned();
            $table->string('tipe_kamar');
            $table->date('tanggal_pesan');
            $table->integer('durasi_menginap');
            $table->string('termasuk_breakfast')->nullable()->default(false);
            $table->string('total_bayar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasis');
    }
};
