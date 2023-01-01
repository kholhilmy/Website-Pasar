<?php

namespace App\Http\Controllers;

use App\Models\Pasar;
use App\Models\Pemilik;
use App\Models\RiwayatKepemilikan;
use App\Models\Tenant;
use Illuminate\Http\Request;

class RiwayatKepemilikanController extends Controller
{
    //
    public function index() {

        $tenants = Tenant::latest();

        // untuk mwngambil keyword yang dimasukkan dalam search box
        if(request('search')) {
            $tenants->where('nama_tenant', 'like', '%' . request('search') . '%');
        }

        return view('transaksi.riwayat-kepemilikan', [
            "title" => "Riwayat Kepemilikan",
            "active" => 'riwayat kepemilikan',
            "tenants" => $tenants->paginate(5)
        ]);
    }

    public function update(RiwayatKepemilikan $kepemilikan)
    {
        request()->validate([
            'pemilikbaru' => 'required',
        ]);

        $kepemilikan->update([
            'pemilik_id_baru' => request('pemilikbaru'),
            'edited_by' => request('created_by')
        ]);

        RiwayatKepemilikan::Create([
            'tenant_id' => request('tenant_baru'),
            'pemilik_id_lama' => request('pemilikbaru'),
            'created_by' => request('created_by')
        ]);

        $tenant = Tenant::where('id',request('tenant_baru'))->first();
        $tenant->update([
            'pemilik_id' => request('pemilikbaru'),
            'edited_by' => request('created_by')
        ]);

        return redirect('/riwayat-kepemilikan')->with('status', 'Transaksi berhasil');
    }

    public function info(RiwayatKepemilikan $kepemilikan)
    {

        $histori = RiwayatKepemilikan::join('pemiliks', 'pemiliks.id', '=', 'riwayat_kepemilikans.pemilik_id_lama')
                ->select('pemiliks.nama','riwayat_kepemilikans.created_at')
                ->where('tenant_id',$kepemilikan['tenant_id'])->latest();

        return view('transaksi.info-kepemilikan', [
            "title" => "Riwayat Kepemilikan",
            "active" => 'riwayat kepemilikan',
            "kepemilikan" => $kepemilikan,
            "histori" => $histori->paginate(5)
        ]);
    }

    // public function store(Request $request) {

    //     $request->validate([
    //         'nama' => 'required|max:255|min:2',
    //         'alamat' => 'required'
    //     ]);

    //     Pasar::firstOrCreate([
    //         'nama_pasar' => $request['nama'],
    //         'alamat' => $request['alamat'],
    //         'created_by' => $request['created_by']
    //     ]);

    //     return redirect('/pasar')->with('status', 'Pasar berhasil ditambahkan!');
    // }

    public function cetakRiwayatAll() {
        $kepemilikans = RiwayatKepemilikan::get();

        return view('cetak.riwayat-kepemilikan', [
            "title" => "Cetak Data Riwayat Kepemilikan",
            "kepemilikans" => $kepemilikans
        ]);
    }
}
