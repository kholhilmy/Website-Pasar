@extends('layouts.mainlayout')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <div class="flex my-6 justify-between">
            <div class="flex">
                @include('components.back-btn', ['url' => 'pengelola'])
                <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">Informasi Pengelola</h2>
            </div>
            <div>
                <a
                class="flex items-center justify-between p-2 text-sm font-semibold dark:text-white dark:bg-teal-500 text-white bg-teal-500 rounded-md shadow-md focus:outline-none focus:shadow-outline-teal active:bg-teal-300 hover:bg-teal-400"
                href="/pengelola/{{ $pengelola->id }}/cetak-pengelola"
                >
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd" />
                    </svg>
                    <span>Export Info</span>
                </div>
                </a>
            </div>
        </div>

        <div class="px-4 py-3 mb-8 text-sm text-left dark:text-gray-400 bg-white rounded-lg shadow-md dark:bg-gray-800">

            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <colgroup>
                        <col span="1" style="width: 20%;">
                        <col span="1" style="width: 80%;">
                    </colgroup>
                    <tbody>
                    <tr>
                        <th class="font-semibold">Nama Pengelola</th>
                        <td>: {{ $pengelola->user->name }}</td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Nama Pasar</th>
                        <td>: {{ $pengelola->pasar->nama_pasar }}</td>
                    </tr>
                    <tr class="h-4"><td></td></tr>
                    <tr>
                        <th class="font-semibold">Dibuat oleh</th>
                        <td>: {{ $pengelola->created_by }}</td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Dibuat pada</th>
                        <td>: {!! date('d M Y', strtotime($pengelola->created_at)) !!}</td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Terakhir diupdate oleh</th>
                        <td>
                            @if(empty($pengelola->edited_by))
                                : {{ $pengelola->created_by }}
                            @else
                                : {{ $pengelola->edited_by }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Terakhir diupdate pada</th>
                        <td>: {!! date('d M Y', strtotime($pengelola->updated_at)) !!}</td>
                    </tr>
                    {{-- <tr>
                        <th class="font-semibold">Alamat</th>
                        <td>: {{ $pasar->alamat }}</td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Pengelola</th>
                        <td>
                            @if(empty($pasar->pengelola->user->name))
                                : -
                            @else
                                : {{ $pasar->pengelola->user->name }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Jumlah Tenant</th>
                        <td>
                            : jumlah
                        </td>
                    </tr>
                    <tr class="h-4"><td></td></tr>
                    <tr>
                        <th class="font-semibold">Dibuat oleh</th>
                        <td>
                            : {{ $pasar->created_by }}
                        </td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Dibuat pada</th>
                        <td>
                            : {{ $pasar->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Terakhir diedit oleh</th>
                        <td>
                            @if(empty($pasar->edited_by))
                                : {{ $pasar->created_by }}
                            @else
                                : {{ $pasar->edited_by }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th class="font-semibold">Terakhir diedit pada</th>
                        <td>
                            : {{ $pasar->updated_at }}
                        </td>
                    </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
