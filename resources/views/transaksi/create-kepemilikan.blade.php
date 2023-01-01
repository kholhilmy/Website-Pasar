@extends('layouts.mainlayout')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <div class="flex my-6">
            @include('components.back-btn', ['url' => 'riwayat-kepemilikan'])
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">Transaksi Tenant</h2>
        </div>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <form method="POST" action="/riwayat-kepemilikan/{{ $kepemilikan->id }}">

                @method('PUT')
                @csrf
                <div class="mb-4">
                    <label class="block mt-4 text-sm" for="pasar">
                        <span class="text-gray-700 dark:text-gray-400">
                        Nama Pasar
                        </span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:ring border-purple-400 focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-md h-8 px-3 py-4 border border-solid"
                            id="pasar" name="pasar" value="{{ $kepemilikan->tenant->pasar->nama_pasar }}" disabled
                        />
                    </label>
                </div>
                <div class="mb-4">
                    <label class="block mt-4 text-sm" for="tenant">
                        <span class="text-gray-700 dark:text-gray-400">
                        Nama Tenant
                        </span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:ring border-purple-400 focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-md h-8 px-3 py-4 border border-solid"
                            id="tenant" name="tenant" value="{{ $kepemilikan->tenant->nama_tenant }}" disabled
                        />
                    </label>
                </div>
                <div class="mb-4">
                    <label class="block mt-4 text-sm" for="pemiliklama">
                        <span class="text-gray-700 dark:text-gray-400">
                        Nama Pemilik Lama
                        </span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:ring border-purple-400 focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-md h-8 px-3 py-4 border border-solid"
                            id="pemiliklama" name="pemiliklama" value="{{ $kepemilikan->pemilikLama->nama }}" disabled
                        />
                    </label>
                </div>
                <div class="mb-4">
                    <label class="block mt-4 text-sm" for="pemilikbaru">
                        <span class="text-gray-700 dark:text-gray-400">
                        Nama Pemilik Baru
                        </span>
                        <select name="pemilikbaru" id="pemilikbaru"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        required >
                            @foreach ($pemiliks as $pemilik)
                                <option value="{{$pemilik->id}}" class="w-full rounded-lg bg-grey-200" >{{$pemilik->nama}}</option>
                            @endforeach
                        </select>
                    </label>
                </div>

                <div class="hidden">
                    <label class="block mt-4 text-sm" for="tenant_baru">
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:ring border-purple-400 focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-md h-8 px-3 py-4 border border-solid"
                            id="tenant_baru" name="tenant_baru" value="{{ $kepemilikan->tenant->id }}"
                        />
                    </label>
                </div>

                <div class="hidden">
                    <label class="block mt-4 text-sm" for="created_by">
                        <input id="created_by" name="created_by" value="{{ Auth::user()->name }}"/>
                    </label>
                </div>

                <a href="/riwayat-kepemilikan"
                    class="px-4 py-2 mr-3 text-sm font-medium leading-5 text-white  transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                    >
                    Cancel
                </a>

                <button
                  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                  Tambah
                </button>
            </form>
        </div>
    </div>
</main>
@endsection
