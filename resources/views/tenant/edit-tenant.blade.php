@extends('layouts.mainlayout')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Edit Tenant</h2>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <form method="POST" action="/tenant/{{ $tenants->id }}">
                @method('PUT')
                @csrf

                <div class="mb-4">
                    <label class="block text-sm" for="nama">
                        <span class="text-gray-700 dark:text-gray-400 mb-3">Nama Tenant</span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:ring border-purple-400 focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-md h-8 px-3 py-4 border border-solid"
                            placeholder="Nama Tenant" id="nama" name="nama" value="{{$tenants->nama_tenant}}" required
                        />
                    </label>
                </div>

                <div class="mb-4">
                    <label class="block mt-4 text-sm" for="pasar">
                        <span class="text-gray-700 dark:text-gray-400">
                        Nama Pasar
                        </span>
                        <select name="pasar" id="pasar"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        required >
                        <option value="{{$tenants->pasar->id}}" class="w-full rounded-lg bg-grey-200" selected>{{ $tenants->pasar->nama_pasar }}</option>
                            @foreach ($pasars as $pasar)
                                <option value="{{$pasar->id}}" class="w-full rounded-lg bg-grey-200" >{{$pasar->nama_pasar}}</option>
                            @endforeach
                        </select>
                    </label>
                </div>

                <div class="mb-4">
                    <label class="block mt-4 text-sm" for="pemilik">
                        <span class="text-gray-700 dark:text-gray-400">
                        Nama Pemilik
                        </span>
                        <select name="pemilik" id="pemilik"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        disabled >
                        <option value="{{$tenants->pemilik->id}}" class="w-full rounded-lg bg-grey-200" selected>{{ $tenants->pemilik->nama }}</option>
                            {{-- @foreach ($pemiliks as $pemilik)
                                <option value="{{$pemilik->id}}" class="w-full rounded-lg bg-grey-200" >{{$pemilik->nama}}</option>
                            @endforeach --}}
                        </select>
                    </label>
                </div>

                <div class="mb-4">
                    <label class="block text-sm" for="biaya_iuran">
                        <span class="text-gray-700 dark:text-gray-400 mb-3">Biaya Iuran</span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:ring border-purple-400 focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-md h-8 px-3 py-4 border border-solid"
                            placeholder="Biaya Iuran" id="biaya_iuran" name="biaya_iuran" value="{{$tenants->biaya_iuran}}" required
                        />
                    </label>
                </div>

                <div class="mb-4">
                    <label class="block text-sm" for="longitude">
                        <span class="text-gray-700 dark:text-gray-400 mb-3">Longitude</span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:ring border-purple-400 focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-md h-8 px-3 py-4 border border-solid"
                            placeholder="Longitude" id="longitude" name="longitude" value="{{$tenants->longitude}}" required
                        />
                    </label>
                </div>

                <div class="mb-4">
                    <label class="block text-sm" for="latitude">
                        <span class="text-gray-700 dark:text-gray-400 mb-3">Latitude</span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:ring border-purple-400 focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-md h-8 px-3 py-4 border border-solid"
                            placeholder="latitude" id="latitude" name="latitude" value="{{$tenants->latitude}}" required
                        />
                    </label>
                </div>

                <div class="hidden">
                    <label class="block mt-4 text-sm" for="edited_by">
                        <input id="edited_by" name="edited_by" value="{{ Auth::user()->name }}"/>
                    </label>
                </div>

                <a href="/tenant"
                    class="px-4 py-2 mr-3 text-sm font-medium leading-5 text-white  transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                    >
                    Cancel
                </a>

                <button
                  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                  Simpan
                </button>
            </form>
        </div>
    </div>
</main>
@endsection
