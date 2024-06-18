<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create([
            "nama" => "Mustofa",
            "nim" => "2010131310008",
            "alamat" => "jl.bunga",
            "asal_sekolah" => "SMA 1"
        ]);


        Mahasiswa::create([
            "nama" => "Rendi",
            "nim" => "2010131310010",
            "alamat" => "jl.mawar",
            "asal_sekolah" => "SMA 2"
        ]);


        Mahasiswa::create([
            "nama" => "Ahmad",
            "nim" => "2010131310010",
            "alamat" => "jl.bunga",
            "asal_sekolah" => "SMA 3"
        ]);

    }
}
