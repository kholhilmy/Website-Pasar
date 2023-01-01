@extends('cetak.layout')

@section('content')

<div class="mt-4">
    <h1>{{ $title }}</h1>
    <div class="mt-4">
        <table class="table table-bordered" id="table-datatables">
            <thead class="thead-dark">
            <tr >
                <th scope="col">No</th>
                <th scope="col">Nama Pasar</th>
                <th scope="col">Alamat</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($pasars as $pasar)
            <tr>
                <td scope="row">
                    {{$loop->iteration}}
                </td>
                <td >
                    {{$pasar->nama_pasar}}
                </td>
                <td >
                    {{$pasar->alamat}}
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
