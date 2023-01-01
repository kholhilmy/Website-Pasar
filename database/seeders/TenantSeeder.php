<?php

namespace Database\Seeders;

use App\Models\RiwayatKepemilikan;
use App\Models\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tenant::firstOrCreate([
            "pasar_id" => 3,
            "nama_tenant" => "Es Dawet Telasih Bu Dermi",
            "pemilik_id" => 1,
            "biaya_iuran" => 1000000,
            "longitude" => "-7.564582193066133",
            "latitude" => "110.81900065605625",
            "created_by" => "Latifah"
        ]);
        Tenant::firstOrCreate([
            "pasar_id" => 1,
            "nama_tenant" => "Toko Batik Klewer",
            "pemilik_id" => 1,
            "biaya_iuran" => 1000000,
            "longitude" => "-7.575535084836033",
            "latitude" => "110.82652089917704",
            "created_by" => "Latifah"
        ]);
        Tenant::firstOrCreate([
            "pasar_id" => 3,
            "nama_tenant" => "Cakwe Hoo",
            "pemilik_id" => 2,
            "biaya_iuran" => 1000000,
            "longitude" => "-7.568726990848964",
            "latitude" => "110.83207330048376",
            "created_by" => "Latifah"
        ]);
        Tenant::firstOrCreate([
            "pasar_id" => 2,
            "nama_tenant" => "Kios Emas Bu Bambang",
            "pemilik_id" => 1,
            "biaya_iuran" => 1000000,
            "longitude" => "-7.568726990848964",
            "latitude" => "110.83207330048376",
            "created_by" => "Hilmy"
        ]);
        Tenant::firstOrCreate([
            "pasar_id" => 4,
            "nama_tenant" => "Kios Sayur Pak Jumad",
            "pemilik_id" => 3,
            "biaya_iuran" => 1000000,
            "longitude" => "-7.568726990848964",
            "latitude" => "110.83207330048376",
            "created_by" => "Hilmy"
        ]);
        Tenant::firstOrCreate([
            "pasar_id" => 5,
            "nama_tenant" => "Kios Sayur Pak Lehor",
            "pemilik_id" => 3,
            "biaya_iuran" => 1000000,
            "longitude" => "-7.568726990848964",
            "latitude" => "110.83207330048376",
            "created_by" => "Hilmy"
        ]);
        Tenant::firstOrCreate([
            "pasar_id" => 6,
            "nama_tenant" => "Kios Buah Pak Junedi",
            "pemilik_id" => 4,
            "biaya_iuran" => 1000000,
            "longitude" => "-7.568726990848964",
            "latitude" => "110.83207330048376",
            "created_by" => "Hilmy"
        ]);
        Tenant::firstOrCreate([
            "pasar_id" => 6,
            "nama_tenant" => "Warung Bakso Aan",
            "pemilik_id" => 5,
            "biaya_iuran" => 1000000,
            "longitude" => "-7.568726990848964",
            "latitude" => "110.83207330048376",
            "created_by" => "Hilmy"
        ]);
        Tenant::firstOrCreate([
            "pasar_id" => 3,
            "nama_tenant" => "Warung Mi Ayam Mansyur Bersaudara",
            "pemilik_id" => 3,
            "biaya_iuran" => 1000000,
            "longitude" => "-7.568726990848964",
            "latitude" => "110.83207330048376",
            "created_by" => "Latifah"
        ]);
        Tenant::firstOrCreate([
            "pasar_id" => 4,
            "nama_tenant" => "Warung Mi Ayam Pangsit Rahmat",
            "pemilik_id" => 4,
            "biaya_iuran" => 1000000,
            "longitude" => "-7.568726990848964",
            "latitude" => "110.83207330048376",
            "created_by" => "Latifah"
        ]);
        RiwayatKepemilikan::firstOrCreate([
            "tenant_id" => 1,
            "pemilik_id_lama" => 1,
            "created_by" => "Latifah"
        ]);
        RiwayatKepemilikan::firstOrCreate([
            "tenant_id" => 2,
            "pemilik_id_lama" => 1,
            "created_by" => "Latifah"
        ]);
        RiwayatKepemilikan::firstOrCreate([
            "tenant_id" => 3,
            "pemilik_id_lama" => 2,
            "created_by" => "Latifah"
        ]);
    }
}
