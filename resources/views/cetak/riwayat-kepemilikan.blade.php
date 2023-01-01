@extends('cetak.layout')

@section('content')

<div class="mt-4">
    <h1>{{ $title }}</h1>
    <div class="mt-4">
        <table class="table table-bordered" id="table-datatables">
            <thead class="thead-dark">
            <tr >
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama Tenant</th>
                <th scope="col">Nama Pasar</th>
                <th scope="col">Nama Pemilik Lama</th>
                <th scope="col">Nama Pemilik Baru</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($kepemilikans as $kepemilikan)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>
                <td>
                    {!! date('d/M/y', strtotime($kepemilikan->created_at)) !!}
                </td>
                <td>
                    {{ $kepemilikan->tenant->nama_tenant }}
                </td>
                <td>
                    {{ $kepemilikan->tenant->pasar->nama_pasar }}
                </td>
                <td>
                    {{ $kepemilikan->pemilikLama->nama }}
                </td>
                <td>
                    @if($kepemilikan->pemilik_id_baru)
                        {{ $kepemilikan->pemilikBaru->nama }}
                    @else
                        -
                    @endif
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
