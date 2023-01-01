@extends('cetak.layout')

@section('content')

<div class="mt-4">
    <h1>{{ $title }}</h1>
    <div class="mt-4">
        <table class="table table-bordered" id="table-datatables">
            <thead class="thead-dark">
            <tr >
                <th scope="col">No</th>
                <th scope="col">Nama Pemilik</th>
                <th scope="col">Alamat</th>
                <th scope="col">NIK</th>
                <th scope="col">No WhatsApp</th>
                <th scope="col">No Telp</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($pemiliks as $pemilik)
            <tr>
                <td scope="row">
                    {{$loop->iteration}}
                </td>
                <td>
                    {{ $pemilik->nama }}
                </td>
                <td>
                    {{ $pemilik->alamat }}
                </td>
                <td>
                    {{ $pemilik->nik }}
                </td>
                <td>
                    {{ $pemilik->no_wa }}
                </td>
                <td>
                    {{ $pemilik->no_telp }}
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
