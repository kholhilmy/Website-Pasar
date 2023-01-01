@extends('cetak.layout')

@section('content')

<div class="mt-4">
    <h1>{{ $title }}</h1>
    <div class="mt-4">
        <table class="table table-bordered" id="table-datatables">
            <thead class="thead-dark">
            <tr >
                <th scope="col">No</th>
                <th scope="col">Nama Tenant</th>
                <th scope="col">Nama Pemilik</th>
                <th scope="col">Nama Pasar</th>
                <th scope="col">Biaya Iuran</th>
                <th scope="col">Longitude</th>
                <th scope="col">Latitude</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($tenants as $tenant)
            <tr>
                <td scope="row">
                    {{$loop->iteration}}
                </td>
                <td >
                    {{$tenant->nama_tenant}}
                </td>
                <td >
                    {{$tenant->pemilik->nama}}
                </td>
                <td >
                    {{$tenant->pasar->nama_pasar}}
                </td>
                <td >
                    {{$tenant->biaya_iuran}}
                </td>
                <td >
                    {{$tenant->longitude}}
                </td>
                <td >
                    {{$tenant->latitude}}
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
