<?php

namespace App\Http\Controllers;

use App\Models\Pasar;
use App\Models\Tenant;
use App\Models\Pemilik;
use App\Models\RiwayatIuran;
use App\Models\RiwayatKepemilikan;
use Illuminate\Http\Request;
use PDF;

class TenantController extends Controller
{
    public function index() {

        $tenants = Tenant::latest();

        // untuk mwngambil keyword yang dimasukkan dalam search box
        if(request('search')) {
            $tenants = Tenant::join('pemiliks', 'pemiliks.id', '=', 'tenants.pemilik_id')
                        ->join('pasars', 'pasars.id', '=', 'tenants.pasar_id')
                        ->where('pemiliks.nama', 'like', '%' . request('search') . '%')
                        ->orWhere('pasars.nama_pasar', 'like', '%' . request('search') . '%')
                        ->orWhere('tenants.nama_tenant', 'like', '%' . request('search') . '%');
        }

        return view('tenant', [
            "title" => "Data Tenant",
            "active" => 'tenant',
            "tenants" => $tenants->paginate(5)
        ]);
    }

    public function create()
    {
        $tenants = Tenant::get();
        $pasars = Pasar::get();
        $pemiliks = Pemilik::get();

        return view('tenant.create-tenant', [
            "title" => "Tambah Tenant",
            "active" => 'tenant',
            "tenants" => $tenants,
            "pasars" => $pasars,
            "pemiliks" => $pemiliks,
        ]);
    }

    public function store(Request $request) {

        $request->validate([
            'nama' => 'required|max:255|min:2',
            'pasar' => 'required',
            'pemilik' => 'required',
            'biaya_iuran' => 'required|integer',
            'longitude' => 'required',
            'latitude' => 'required'
        ]);

        $tenant = Tenant::firstOrCreate([
            'nama_tenant' => $request['nama'],
            'pasar_id' => $request['pasar'],
            'pemilik_id' =>  $request['pemilik'],
            'biaya_iuran' =>(int) $request['biaya_iuran'],
            'created_by' => $request['created_by'],
            'longitude' => $request['longitude'],
            'latitude' => $request['latitude']
        ]);

        RiwayatKepemilikan::firstOrCreate([
            'tenant_id' => $tenant->id,
            'pemilik_id_lama' => $request['pemilik'],
            'created_by' => $request['created_by'],
        ]);

        return redirect('/tenant')->with('status', 'Tenant berhasil ditambahkan!');
    }
    public function edit(Tenant $tenant)
    {
        $tenants = Tenant::get();
        $pasars = Pasar::get();
        $pemiliks = Pemilik::get();
        return view('tenant.edit-tenant', [
            "title" => "Edit Tenant",
            "active" => 'tenant',
            "tenants" => $tenant,
            "pasars" => $pasars,
            "pemiliks" => $pemiliks
        ]);
    }

    public function update(Tenant $tenant)
    {
        request()->validate([
            'nama' => 'required|max:255|min:2',
            'pasar' => 'required',
            'pemilik' => 'required',
            'biaya_iuran' => 'required|integer',
            'longitude' => 'required',
            'latitude' => 'required'
        ]);

        $tenant->update([
            'nama_tenant' => request('nama'),
            'pasar_id' => request('pasar'),
            'pemilik_id' =>  request('pemilik'),
            'biaya_iuran' =>(int) request('biaya_iuran'),
            'edited_by' => request('edited_by'),
            'longitude' => request('longitude'),
            'latitude' => request('latitude')
        ]);

        return redirect('/tenant')->with('status', 'Tenant berhasil diupdate!');
    }

    public function destroy(Tenant $tenant)
    {
        $tenant->delete();

        return redirect('/tenant')->with('status', 'Tenant berhasil dihapus!');

    }

    public function info(Tenant $tenant)
    {
        $pasars = Pasar::get();
        $pemiliks = Pemilik::get();
        return view('tenant.info-tenant', [
            "title" => "Informasi Tenant",
            "active" => 'tenant',
            "tenant" => $tenant,
            "pasars" => $pasars,
            "pemiliks" => $pemiliks
        ]);
    }

    public function cetakTenantAll() {
        $tenants = Tenant::get();

        return view('cetak.tenant', [
            "title" => "Cetak Data Tenant",
            "tenants" => $tenants
        ]);
    }

    public function cetakTenantSingle(Tenant $tenant) {

        $pdf = PDF::loadView('cetak.tenant-single', compact(['tenant']));
        return $pdf->download('tenant-info.pdf');
    }

    public function createKepemilikan(Tenant $tenant)
    {
        $pemiliks = Pemilik::get();
        $kepemilikan = RiwayatKepemilikan::where('tenant_id', '=', $tenant['id'])->latest()->first();

        return view('transaksi.create-kepemilikan', [
            "title" => "Riwayat Kepemilikan",
            "active" => 'riwayat kepemilikan',
            "kepemilikan" => $kepemilikan,
            'pemiliks' => $pemiliks
        ]);
    }

    public function createIuran(Tenant $tenant)
    {
        // $iuran = RiwayatIuran::where('tenant_id', '=', $tenant['id'])->latest()->first();

        // dd($tenant);
        return view('transaksi.create-iuran', [
            "title" => "Riwayat Kepemilikan",
            "active" => 'riwayat kepemilikan',
            "tenant" => $tenant,
        ]);
    }

}
