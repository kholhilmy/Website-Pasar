@extends('layouts.mainlayout')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Update Pemilik</h2>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <form method="POST" action="/pemilik/{{ $pemilik->id }}">
                @method('PUT')
                @csrf

                <div class="mb-4">
                    <label class="block text-sm" for="nama">
                        <span class="text-gray-700 dark:text-gray-400 mb-3">Nama Pemilik</span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:ring border-purple-400 focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-md h-8 px-3 py-4 border border-solid"
                            placeholder="Nama Pemilik" id="nama" name="nama" value="{{ $pemilik->nama }}" required
                        />
                    </label>
                </div>

                <div class="mb-4">
                    <label class="block mt-4 text-sm" for="alamat">
                        <span class="text-gray-700 dark:text-gray-400">Alamat</span>
                        <textarea
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray border border-solid rounded-md h-20 px-3 py-2"
                            rows="3"
                            placeholder="Alamat Pemilik" id="alamat" name="alamat" required
                        >{{ $pemilik->alamat }}</textarea>
                    </label>
                </div>

                <div class="mb-4">
                    <label class="block mt-4 text-sm" for="nik">
                        <span class="text-gray-700 dark:text-gray-400">NIK</span>
                        <input
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray border border-solid rounded-md h-20 px-3 py-2"
                            rows="3"
                            placeholder="Nik" id="nik" name="nik" value="{{ $pemilik->nik }}" required
                        ></input>
                    </label>
                </div>
                <div class="mb-4">
                    <label class="block text-sm" for="no_wa">
                        <span class="text-gray-700 dark:text-gray-400 mb-3">No WhatsApp</span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:ring border-purple-400 focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-md h-8 px-3 py-4 border border-solid"

                            placeholder="No WhatsApp" id="no_wa" name="no_wa" value="{{ $pemilik->no_wa }}" required
                        ></input>
                    </label>
                </div>
                <div class="mb-4">
                    <label class="block text-sm" for="no_telp">
                        <span class="text-gray-700 dark:text-gray-400 mb-3">No Telephone</span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:ring border-purple-400 focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-md h-8 px-3 py-4 border border-solid"
                            placeholder="No Telephone" id="no_telp" name="no_telp" value="{{ $pemilik->no_telp }}" required
                        />
                    </label>
                </div>
                <div class="hidden">
                    <label class="block mt-4 text-sm" for="edited_by">
                        <input id="edited_by" name="edited_by" value="{{ Auth::user()->name }}"/>
                    </label>
                </div>


                <a href="/pemilik"
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
