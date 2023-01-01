<?php

namespace Database\Seeders;

use App\Models\Pasar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pasar::firstOrCreate([
            "nama_pasar" => "Pasar Klewer",
            "alamat" =>"Jalan DR. Radjiman No.5A, Kecamatan Pasar Kliwon, Kota Surakarta",
            "created_by" => "Latifah"
        ]);

        Pasar::firstOrCreate([
            "nama_pasar" => "Pasar Antik Triwindu",
            "alamat" =>"Jalan Diponegoro, Kecamatan Banjarsari, Kota Surakarta",
            "created_by" => "Latifah"
        ]);

        Pasar::firstOrCreate([
            "nama_pasar" => "Pasar Gede Harjonagoro",
            "alamat" =>"Desa Sudiroprajan, Kecamatan Jebres, Kota Surakarta",
            "created_by" => "Latifah"
        ]);

        Pasar::firstOrCreate([
            "nama_pasar" => "Pasar Kerajinan Alun-Alun Utara",
            "alamat" =>"Desa Kauman, Kecamatan Pasar Kliwon, Kota Surakarta",
            "created_by" => "Latifah"
        ]);
        Pasar::firstOrCreate([
            "nama_pasar" => "Pasar Klithikan Notohardjo",
            "alamat" =>"Jalan Sungai Serang I No.313, Kecamatan Pasar Kliwon, Kota Surakarta",
            "created_by" => "Latifah"
        ]);
        Pasar::firstOrCreate([
            "nama_pasar" => "Pasar Nusukan",
            "alamat" =>"Jl. Kapten Piere Tendean No.87b, Nusukan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57135",
            "created_by" => "Hilmy"
        ]);
        Pasar::firstOrCreate([
            "nama_pasar" => "Pasar Legi",
            "alamat" =>"Jl. Letjen S. Parman No.19, Setabelan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57133",
            "created_by" => "Hilmy"
        ]);
        Pasar::firstOrCreate([
            "nama_pasar" => "Pasar Kliwon",
            "alamat" =>"Jl. Kapten Mulyadi No.110, Kedung Lumbu, Kota Surakarta, Jawa Tengah 57133, Indonesia.",
            "created_by" => "Hilmy"
        ]);
    }
}
