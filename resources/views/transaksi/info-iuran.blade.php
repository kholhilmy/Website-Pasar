@auth
@extends('layouts.mainlayout')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">

    <div class="flex my-6 justify-between">
            <div class="flex">
                @include('components.back-btn',['url' => 'riwayat-iuran'])
                <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">Riwayat Iuran {{ $iuran->tenant->nama_tenant }}</h2>
            </div>
            <div>
                <a
                class="flex items-center justify-between p-2 text-sm font-semibold dark:text-white dark:bg-teal-500 text-white bg-teal-500 rounded-md shadow-md focus:outline-none focus:shadow-outline-teal active:bg-teal-300 hover:bg-teal-400"
                href="/riwayat-iuran/{{ $iuran->id }}/cetak-iuran"
                >
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd" />
                    </svg>
                    <span>Export Riwayat</span>
                </div>
                </a>
            </div>
        </div>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
            <tr
                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
            >
                <th class="px-4 py-3">No</th>
                <th class="px-4 py-3">Periode</th>
                <th class="px-4 py-3">Jumlah Bayar</th>
                <th class="px-4 py-3">Tanggal Bayar</th>
            </tr>
            </thead>
            <tbody
            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
            >
            @foreach ($histori as $key => $i)
            <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                   {{ $histori->firstItem() + $key }}
                </td>
                <td class="px-4 py-3 text-sm flex-initial w-16">
                    {!! date('M Y', strtotime($i->tahun_bulan)) !!}
                </td>
                <td class="px-4 py-3 text-sm flex-initial w-16">
                    Rp {{ $i->jml_bayar }}
                </td>
                <td class="px-4 py-3 text-sm flex-initial w-16">
                    {!! date('d/M/y', strtotime($i->tgl_bayar)) !!}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>

        <div
        class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
        >
        <span class="flex items-center col-span-3">
            Showing {{ $histori->firstItem() }} - {{ $histori->lastItem() }} of {{ $histori->total() }}
        </span>
        <span class="col-span-2"></span>
        <!-- Pagination -->
        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
            <nav aria-label="Table navigation">
                {{ $histori->links('pagination::tailwind') }}
            </nav>
        </span>
        </div>

    </div>
</main>
@endsection
@endauth
