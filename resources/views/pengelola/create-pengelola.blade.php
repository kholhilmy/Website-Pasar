@extends('layouts.mainlayout')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Tambah Pengelola</h2>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <form method="POST" action="/pengelola">

                @csrf

                <div class="mb-4">
                    <label class="block mt-4 text-sm" for="user">
                        <span class="text-gray-700 dark:text-gray-400">
                        Nama Pengelola
                        </span>
                        <select name="user" id="user"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        required >
                            @foreach ($users as $user)
                                <option value="{{$user->id}}" class="w-full rounded-lg bg-grey-200" >{{$user->name}}</option>
                            @endforeach
                        </select>
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
                            @foreach ($pasars as $pasar)
                                <option value="{{$pasar->id}}" class="w-full rounded-lg bg-grey-200" >{{$pasar->nama_pasar}}</option>
                            @endforeach
                        </select>
                    </label>
                </div>

                <div class="hidden">
                    <label class="block mt-4 text-sm" for="created_by">
                        <input id="created_by" name="created_by" value="latifah"/>
                    </label>
                </div>

                <a href="/pengelola"
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
