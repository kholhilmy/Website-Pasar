<?php

namespace App\Http\Controllers;

use App\Models\Pemilik;
use App\Models\Tenant;
use Illuminate\Http\Request;
use PDF;

class PemilikController extends Controller
{
    public function index() {

        $pemiliks = Pemilik::latest();

        // untuk mwngambil keyword yang dimasukkan dalam search box
        if(request('search')) {
            $pemiliks->where('nama', 'like', '%' . request('search') . '%')
                ->orWhere('alamat', 'like', '%' . request('search') . '%');
        }

        return view('pemilik', [
            "title" => "Data Pemilik",
            "active" => 'pemilik',
            "pemiliks" => $pemiliks->paginate(5)
        ]);
    }
    public function create() {
        $pemiliks = Pemilik::get();

        return view('pemilik.create-pemilik', [
            "title" => "Tambah Pemilik",
            "active" => 'pemilik',
            "pemiliks" => $pemiliks
        ]);

    }

    public function store(Request $request) {

        $request->validate([
            'nama' => 'required|max:255|min:2',
            'alamat' => 'required',
            'nik' => 'required|max:255|min:5',
            'no_wa' => 'required|max:255|min:5',
            'no_telp' => 'required|max:255|min:5'
        ]);

        Pemilik::firstOrCreate([
            'nama' => $request['nama'],
            'alamat' => $request['alamat'],
            'nik' => $request['nik'],
            'no_wa' => $request['no_wa'],
            'no_telp' => $request['no_telp'],
            'created_by' => $request['created_by']
        ]);

        return redirect('/pemilik')->with('status', 'Pemilik berhasil ditambahkan!');
    }

    public function edit(Pemilik $pemilik)
    {
        return view('pemilik.edit-pemilik', [
            "title" => "Tambah Pemilik",
            "active" => 'pemilik',
            "pemilik" => $pemilik
        ]);
    }

    public function update(Pemilik $pemilik)
    {
        request()->validate([
            'nama' => 'required|max:255|min:2',
            'alamat' => 'required',
            'nik' => 'required|max:255|min:5',
            'no_wa' => 'required|max:255|min:5',
            'no_telp' => 'required|max:255|min:5'
        ]);

        $pemilik->update([
            'nama' => request('nama'),
            'alamat' => request('alamat'),
            'nik' => request('nik'),
            'no_wa' => request('no_wa'),
            'no_telp' => request('no_telp'),
            'edited_by' => request('edited_by')
        ]);

        return redirect('/pemilik')->with('status', 'Pemilik berhasil diupdate!');
    }

    public function view(Pemilik $pemilik)
    {
        return view('pemilik.view-pemilik', [
            "title" => "View Pemilik",
            "active" => 'pemilik',
            "pemilik" => $pemilik
        ]);
    }
    public function destroy(Pemilik $pemilik)
    {
        $pemilik->delete();

        return redirect('/pemilik')->with('status', 'Pemilik berhasil dihapus!');

    }

    public function cetakPemilikAll() {
        $pemiliks = Pemilik::get();

        return view('cetak.pemilik', [
            "title" => "Cetak Data Pemilik",
            "pemiliks" => $pemiliks
        ]);
    }

    public function cetakPemilikSingle(Pemilik $pemilik) {

        $pdf = PDF::loadView('cetak.pemilik-single', compact(['pemilik']));
        return $pdf->download('pemilik-info.pdf');
    }

}
