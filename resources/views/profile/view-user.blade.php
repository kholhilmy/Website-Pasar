@extends('layouts.mainlayout')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <div class="flex my-6">
            @include('components.back-btn', ['url' => 'pasar'])
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">User Profile</h2>
        </div>
        <div class="flex px-0 my-6 space-x-3">
            @auth
            <button><a href="/user/profile/{{ Auth::user()->id }}/edit"
                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                aria-label="Edit"
                >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                  </svg>
                </a></button>
            @endauth
        </div>

{{--        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <img
                        class="object-cover w-9 h-9 rounded-full"
                        src="https://qph.fs.quoracdn.net/main-qimg-c0f768d042fbbb8ad679072236e67ee5-lq"
                        alt=""
                        aria-hidden="true" 
            />
                </div>
            </div>
        </div> --}}

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <tbody>
                            <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-1 font-semibold">Nama </td>
                            <td class="px-1 py-1">:</td>
                            <td class="px-1 py-1">{{ $user->name }}</td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-1 font-semibold">Email </td>
                            <td class="px-1 py-1 ">:</td>
                            <td class="px-1 py-1">{{ $user->email }}</td>
                            </tr>


                            <tr class="text-gray-700 dark:text-gray-400">
                            </tr>
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
