<?php

namespace App\Http\Controllers;

use App\Models\Pasar;
use Illuminate\Http\Request;
use PDF;

class PasarController extends Controller
{
    public function index() {

        $pasars = Pasar::latest();

        // untuk mwngambil keyword yang dimasukkan dalam search box
        if(request('search')) {
            $pasars->where('nama_pasar', 'like', '%' . request('search') . '%')
            ->orWhere('alamat', 'like', '%' . request('search') . '%');
        }

        return view('pasar', [
            "title" => "Data Pasar",
            "active" => 'pasar',
            "pasars" => $pasars->paginate(5)
        ]);
    }

    public function create()
    {
        $pasars = Pasar::get();

        return view('pasar.create-pasar', [
            "title" => "Tambah Pasar",
            "active" => 'pasar',
            "pasars" => $pasars
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required|max:255|min:2',
            'alamat' => 'required'
        ]);

        Pasar::firstOrCreate([
            'nama_pasar' => $request['nama'],
            'alamat' => $request['alamat'],
            'created_by' => $request['created_by']
        ]);

        return redirect('/pasar')->with('status', 'Pasar berhasil ditambahkan!');
    }

    public function edit(Pasar $pasar)
    {
        return view('pasar.edit-pasar', [
            "title" => "Tambah Pasar",
            "active" => 'pasar',
            "pasar" => $pasar
        ]);
    }

    public function update(Pasar $pasar)
    {
        request()->validate([
            'nama' => 'required|max:255|min:2',
            'alamat' => 'required'
        ]);

        $pasar->update([
            'nama_pasar' => request('nama'),
            'alamat' => request('alamat'),
            'edited_by' => request('edited_by')
        ]);

        return redirect('/pasar')->with('status', 'Pasar berhasil diupdate!');
    }

    public function destroy(Pasar $pasar)
    {
        $pasar->delete();

        return redirect('/pasar')->with('status', 'Pasar berhasil dihapus!');

    }

    public function info(Pasar $pasar)
    {
        return view('pasar.info-pasar', [
            "title" => "Informasi Pasar",
            "active" => 'pasar',
            "pasar" => $pasar
        ]);
    }

    public function cetakPasarAll() {
        $pasars = Pasar::get();

        return view('cetak.pasar', [
            "title" => "Cetak Data Pasar",
            "pasars" => $pasars
        ]);
    }

    public function cetakPasarSingle(Pasar $pasar) {

        $pdf = PDF::loadView('cetak.pasar-single', compact(['pasar']));
        return $pdf->download('pasar-info.pdf');
    }

}
