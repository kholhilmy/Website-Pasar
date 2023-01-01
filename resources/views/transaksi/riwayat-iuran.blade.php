@auth
@extends('layouts.mainlayout')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
    <div class="flex justify-between w-full">
        <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
        >
        Data Iuran Tenant
        </h2>

        <div class="flex px-0 my-6 space-x-3">
            @include('components.search-input', ['url' => 'riwayat-kepemilikan', 'text' => 'riwayat'])
        </div>
    </div>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <colgroup>
                <col span="1" style="width: 5%;">
                <col span="1" style="width: 30%;">
                <col span="1" style="width: 40%;">
                <col span="1" style="width: 10%;">
            </colgroup>
            <thead>
            <tr
                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
            >
                <th class="px-4 py-3">No</th>
                <th class="px-4 py-3">Nama Tenant</th>
                <th class="px-4 py-3">Nama Pasar</th>
                <th class="px-4 py-3">Action</th>
            </tr>
            </thead>
            <tbody
            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
            >
            @foreach ($tenants as $key => $tenant)
            <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                    {{ $tenants->firstItem() + $key }}
                </td>
                {{-- <td class="px-4 py-3 text-sm flex-initial w-16">
                    {!! date('d/M/y', strtotime($tenant->created_at)) !!}
                </td> --}}
                <td class="px-4 py-3 text-sm flex-initial w-16">
                    {{ $tenant->nama_tenant }}
                </td>
                <td class="px-4 py-3 text-sm flex-initial w-16">
                    {{ $tenant->pasar->nama_pasar }}
                </td>
                <td class="px-4 py-3 w-4 flex-initial">
                    <div class="flex items-center space-x-4 text-sm">
                        <a href="/riwayat-iuran/{{ $tenant->id }}/view"
                        class="flex items-center justify-between py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="View"
                        >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                        </svg>
                        </a>
                        @auth
                        <a href="/riwayat-iuran/{{ $tenant->id }}/create"
                        class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="View"
                        >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                        </svg>
                        </a>
                        @endauth
                    </div>

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
            Showing {{ $tenants->firstItem() }} - {{ $tenants->lastItem() }} of {{ $tenants->total() }}
        </span>
        <span class="col-span-2"></span>
        <!-- Pagination -->
        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
            <nav aria-label="Table navigation">
                {{ $tenants->links('pagination::tailwind') }}
            </nav>
        </span>
        </div>

    </div>
</main>
@endsection
@endauth
