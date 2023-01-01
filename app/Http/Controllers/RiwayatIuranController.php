<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatIuran;
use App\Models\Tenant;
use App\Models\Pemilik;


class RiwayatIuranController extends Controller
{
//     public function index(){
//     $iurans = RiwayatIuran::latest();

//     // untuk mwngambil keyword yang dimasukkan dalam search box
//     if(request('search')) {
//         $iurans->where('nama_tenant', 'like', '%' . request('search') . '%')
//         ->orWhere('alamat', 'like', '%' . request('search') . '%');
//     }

//     return view('transaksi.riwayat-iuran', [
//         "title" => "Riwayat Iuran",
//         "active" => 'riwayat iuran',
//         "iurans" => $iurans->get()
//     ]);
// }
    public function index() {

            $tenants = Tenant::latest();

            // untuk mwngambil keyword yang dimasukkan dalam search box
            if(request('search')) {
                $tenants->where('nama_tenant', 'like', '%' . request('search') . '%');
            }

            return view('transaksi.riwayat-iuran', [
                "title" => "Riwayat Iuran",
                "active" => 'riwayat iuran',
                "tenants" => $tenants->paginate(5)
            ]);
    }
    public function create()
{
    $tenants = Tenant::get();
    $iurans = RiwayatIuran::get();

    return view('transaksi.create-iuran', [
        "title" => "Riwayat Iuran",
        "active" => 'riwayat Iuran',
        "tenants" => $tenants,
        "iurans" => $iurans

    ]);
}
    public function store(Request $request) {

        $request->validate([
            'tenantbaru' => 'required',
            'tahun_bulan' => 'required',
            'jml_bayar' => 'required',
            'tgl_bayar' => 'required'
        ]);

        RiwayatIuran::create([
            'tenant_id' => $request['tenantbaru'],
            'tahun_bulan' => $request['tahun_bulan'],
            'jml_bayar' => $request['jml_bayar'],
            'tgl_bayar' => $request['tgl_bayar'],
            'created_by' => $request['created_by']
        ]);

        return redirect('/riwayat-iuran')->with('status', 'Transaksi berhasil!');
    }

    public function info(RiwayatIuran $iuran)
    {
        $histori = RiwayatIuran::join('tenants', 'tenants.id', '=', 'riwayat_iurans.tenant_id')
                ->select('tenants.nama_tenant', 'tenants.created_at', 'riwayat_iurans.tgl_bayar', 'riwayat_iurans.tahun_bulan', 'riwayat_iurans.jml_bayar')
                ->where('tenant_id',$iuran['tenant_id'])->latest();

        return view('transaksi.info-iuran', [
            "title" => "Riwayat Iuran",
            "active" => 'riwayat iuran',
            "iuran" => $iuran,
            "histori"=> $histori->paginate(5)
        ]);
    }


}
