@extends('layouts.mainlayout')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <div class="flex my-6">
            @include('components.back-btn', ['url' => 'profile'])
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">Edit Profile</h2>
        </div>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <tbody>
                            <form method="POST" action="profile/{{ Auth::user()->id }}">
                                @method('PUT')
                                @csrf
                
                                <div class="mb-4">
                                    <label class="block text-sm" for="nama">
                                        <span class="text-gray-700 dark:text-gray-400 mb-3">Nama Usert</span>
                                        <input
                                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:ring border-purple-400 focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-md h-8 px-3 py-4 border border-solid"
                                            placeholder="Nama User" id="name" name="name" value="{{Auth::user()->name}}" required
                                            />
                                    </label>
                                </div>
                
                                <a href="{{asset('user/profile/' . Auth::user()->id)}}"
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
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
