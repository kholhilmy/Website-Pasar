<?php

namespace Database\Seeders;

use App\Models\Pemilik;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PemilikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Pemilik::firstOrCreate([
            "nama" => "Ahmad Subarjo",
            "alamat" =>"Jalan Kabut, Kecamatan Jebres, Kota Surakarta",
            "nik" => "776666",
            "no_wa" => "087765544444",
            "no_telp"=> "087765544444",
            "created_by" => "Latifah"
        ]);
        Pemilik::firstOrCreate([
            "nama" => "Gathotkaca",
            "alamat" =>"Jalan Surya, Kecamatan Jebres, Kota Surakarta",
            "nik" => "776666",
            "no_wa" => "087765544444",
            "no_telp"=> "087765544444",
            "created_by" => "Latifah"
        ]);
        Pemilik::firstOrCreate([
            "nama" => "Antansena Suherman",
            "alamat" =>"Jalan Kabut, Kecamatan Jebres, Kota Surakarta",
            "nik" => "3433353795478",
            "no_wa" => "087765544564",
            "no_telp"=> "08776554564",
            "created_by" => "Latifah"
        ]);
        Pemilik::firstOrCreate([
            "nama" => "Bayucaraka Ahmad",
            "alamat" =>"Jalan Kartika, Kecamatan Jebres, Kota Surakarta",
            "nik" => "3433353796354",
            "no_wa" => "084583436476",
            "no_telp"=> "084583436476",
            "created_by" => "Latifah"
        ]);
        Pemilik::firstOrCreate([
            "nama" => "Shankara Suharjo",
            "alamat" =>"Jl. Malabar Timur No. 7 Rt 03 Rw 15, Mojosongo, Jebres, Surakarta. Kode Pos, : 57127.",
            "nik" => "3433353193765",
            "no_wa" => "084258942984",
            "no_telp"=> "084258942984",
            "created_by" => "Latifah"
        ]);
        Pemilik::firstOrCreate([
            "nama" => "Ernes Bamantara",
            "alamat" =>"Jln. Adi Sumarmo No. Genap 92 - 270 - Kel. Banyuanyar - Kec. Banjarsari - SURAKARTA (SOLO)",
            "nik" => "3433353537054",
            "no_wa" => "084258094765",
            "no_telp"=> "084258094765",
            "created_by" => "Latifah"
        ]);
    }
}
