<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('kamars')->delete();

        // Tambahkan data seeder
        DB::table('kamars')->insert([
            'tipe_kamar' => 'Standard',
            'harga' => '200000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kamars')->insert([
            'tipe_kamar' => 'Deluxe',
            'harga' => '500000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kamars')->insert([
            'tipe_kamar' => 'Executive',
            'harga' => '1000000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
