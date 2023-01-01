@extends('cetak.layout')

@section('content')

<div class="mt-4">
    <h1>{{ $title }}</h1>
    <div class="mt-4">
        <table class="table table-bordered" id="table-datatables">
            <thead class="thead-dark">
            <tr >
                <th scope="col">No</th>
                <th scope="col">Nama Pengelola</th>
                <th scope="col">Nama Pasar</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($pengelolas as $pengelola)
            <tr>
                <td scope="row">
                    {{$loop->iteration}}
                </td>
                <td>
                    {{ $pengelola->user->name }}
                </td>
                <td>
                    {{ $pengelola->pasar->nama_pasar }}
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
