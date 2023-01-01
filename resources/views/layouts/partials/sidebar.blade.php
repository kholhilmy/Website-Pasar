<!-- Desktop sidebar -->
<aside
class="z-0 flex-shrink-0 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block"
>
<div class="py-4 text-gray-500 dark:text-gray-400">
    <a
    class="ml-6 text-xl font-bold text-gray-800 dark:text-gray-200"
    href="#"
    >
    Pasar Surakarta
    </a>
    {{-- <ul class="mt-6">
    <li class="relative px-6 py-3">
        <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ ($active === "dashboard") ? "dark:text-gray-100 bg-purple-600 border border-transparent rounded-lg focus:outline-none focus:shadow-outline-purple" : "" }}"
        href="index.html"
        >
        <svg
            class="w-5 h-5"
            aria-hidden="true"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path
            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
            ></path>
        </svg>
        <span class="ml-4">Dashboard</span>
        </a>
    </li>
    </ul> --}}
    <ul class="mt-8">

    <li class="relative px-6 py-3">
        <span
        class="absolute inset-y-0 left-0 w-1 {{ ($active === "dashboard") ? "bg-purple-600" : "" }} rounded-tr-lg rounded-br-lg"
        aria-hidden="true"
        ></span>
        <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ ($active === "dashboard") ? "dark:text-gray-100 " : "" }}"
        href="/home"
        >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
            <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
        </svg>
        <span class="ml-4">Dashboard</span>
        </a>
    </li>

    <li class="relative px-6 py-3">
        <span
        class="absolute inset-y-0 left-0 w-1 {{ ($active === "pasar") ? "bg-purple-600" : "" }} rounded-tr-lg rounded-br-lg"
        aria-hidden="true"
        ></span>
        <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ ($active === "pasar") ? "dark:text-gray-100 " : "" }}"
        href="/pasar"
        >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
            <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
        </svg>
        <span class="ml-4">Pasar</span>
        </a>
    </li>
    <li class="relative px-6 py-3">
        <span
        class="absolute inset-y-0 left-0 w-1 {{ ($active === "tenant") ? "bg-purple-600" : "" }} rounded-tr-lg rounded-br-lg"
        aria-hidden="true"
        ></span>
        <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ ($active === "tenant") ? "dark:text-gray-100 " : "" }}"
        href="/tenant"
        >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
            <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
        </svg>
        <span class="ml-4">Tenant</span>
        </a>
    </li>

    <li class="relative px-6 py-3">
        <span
        class="absolute inset-y-0 left-0 w-1 {{ ($active === "pemilik") ? "bg-purple-600" : "" }} rounded-tr-lg rounded-br-lg"
        aria-hidden="true"
        ></span>
        <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ ($active === "pemilik") ? "dark:text-gray-100 " : "" }}"
        href="/pemilik"
        >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
        </svg>
        <span class="ml-4">Pemilik</span>
        </a>
    </li>
    <li class="relative px-6 py-3">
        <span
        class="absolute inset-y-0 left-0 w-1 {{ ($active === "pengelola") ? "bg-purple-600" : "" }} rounded-tr-lg rounded-br-lg"
        aria-hidden="true"
        ></span>
        <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ ($active === "pengelola") ? "dark:text-gray-100 " : "" }}"
        href="/pengelola"
        >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
        </svg>
        <span class="ml-4">Pengelola</span>
        </a>
    </li>
    @auth
    <li class="relative px-6 py-3">
        <span
        class="absolute inset-y-0 left-0 w-1 {{ ($active === "riwayat kepemilikan" || $active === "riwayat iuran") ? "bg-purple-600" : "" }} rounded-tr-lg rounded-br-lg"
        aria-hidden="true"
        ></span>
        <button
        class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
        @click="togglePagesMenu"
        aria-haspopup="true"
        >
        <span class="inline-flex items-center {{ ($active === "riwayat kepemilikan" || $active === "riwayat iuran") ? "dark:text-gray-100 " : "" }}">
            <svg
            class="w-5 h-5"
            aria-hidden="true"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
            >
            <path
                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
            ></path>
            </svg>
            <span class="ml-4 ">Transaksi</span>
        </span>
        <svg
            class="w-4 h-4"
            aria-hidden="true"
            fill="currentColor"
            viewBox="0 0 20 20"
        >
            <path
            fill-rule="evenodd"
            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
            clip-rule="evenodd"
            ></path>
        </svg>
        </button>
        <template x-if="isPagesMenuOpen">
        <ul
            x-transition:enter="transition-all ease-in-out duration-300"
            x-transition:enter-start="opacity-25 max-h-0"
            x-transition:enter-end="opacity-100 max-h-xl"
            x-transition:leave="transition-all ease-in-out duration-300"
            x-transition:leave-start="opacity-100 max-h-xl"
            x-transition:leave-end="opacity-0 max-h-0"
            class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
            aria-label="submenu"
        >
            <li
            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
            >
            <a class="w-full {{ ($active === "riwayat kepemilikan") ? "dark:text-gray-100 " : "" }}" href="/riwayat-kepemilikan">Riwayat Kepemilikan</a>
            </li>
            <li
            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
            >
            <a class="w-full {{ ($active === "riwayat iuran") ? "dark:text-gray-100 " : "" }}" href="/riwayat-iuran">
                Riwayat Iuran
            </a>
            </li>
        </ul>
        </template>
    </li>
    @endauth
    {{--
    @guest
    <li class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
        <span
        class="absolute inset-y-0 left-0 w-1 {{ ($active === "login") ? "bg-purple-600" : "" }} rounded-tr-lg rounded-br-lg"
        aria-hidden="true"
        ></span>
        <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ ($active === "login") ? "dark:text-gray-100 " : "" }}"
        href="/login"
        >
        <svg
            class="w-5 h-5"
            aria-hidden="true"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
        </svg>
        <span class="ml-4">Login</span>
        </a>
    </li>
    @endguest --}}
    </ul>
    {{-- <div class="px-6 my-6">
    <button
        class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
    >
        Create account
        <span class="ml-2" aria-hidden="true">+</span>
    </button>
    </div> --}}
</div>
</aside>


<!-- Mobile sidebar -->
<!-- Backdrop -->
<div
x-show="isSideMenuOpen"
x-transition:enter="transition ease-in-out duration-150"
x-transition:enter-start="opacity-0"
x-transition:enter-end="opacity-100"
x-transition:leave="transition ease-in-out duration-150"
x-transition:leave-start="opacity-100"
x-transition:leave-end="opacity-0"
class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
></div>
<aside
class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
x-show="isSideMenuOpen"
x-transition:enter="transition ease-in-out duration-150"
x-transition:enter-start="opacity-0 transform -translate-x-20"
x-transition:enter-end="opacity-100"
x-transition:leave="transition ease-in-out duration-150"
x-transition:leave-start="opacity-100"
x-transition:leave-end="opacity-0 transform -translate-x-20"
@click.away="closeSideMenu"
@keydown.escape="closeSideMenu"
>
<div class="py-4 text-gray-500 dark:text-gray-400">
    <a
    class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
    href="#"
    >
    Pasar Surakarta
    </a>
    {{-- <ul class="mt-6">
    <li class="relative px-6 py-3">
        <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
        href="index.html"
        >
        <svg
            class="w-5 h-5"
            aria-hidden="true"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path
            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
            ></path>
        </svg>
        <span class="ml-4">Dashboard</span>
        </a>
    </li>
    </ul> --}}
    <ul>
    <li class="relative px-6 py-3">
        <span
        class="absolute inset-y-0 left-0 w-1 {{ ($active === "pasar") ? 'bg-purple-600' : '' }} rounded-tr-lg rounded-br-lg"
        aria-hidden="true"
        ></span>
        <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ ($active === "pasar") ? "dark:text-gray-100 " : "" }}"
        href="/pasar"
        >
        <svg
            class="w-5 h-5"
            aria-hidden="true"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
        </svg>
        <span class="ml-4">Pasar</span>
        </a>
    </li>
    <li class="relative px-6 py-3">
        <span
        class="absolute inset-y-0 left-0 w-1 {{ ($active === "tenant") ? "bg-purple-600" : "" }} rounded-tr-lg rounded-br-lg"
        aria-hidden="true"
        ></span>

        <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ ($active === "tenant") ? "dark:text-gray-100 " : "" }}"
        href="/tenant"
        >
        <svg
            class="w-5 h-5"
            aria-hidden="true"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
        </svg>
        <span class="ml-4">Tenant</span>
        </a>
    </li>
    <li class="relative px-6 py-3">
        <span
        class="absolute inset-y-0 left-0 w-1 {{ ($active === "pemilik") ? "bg-purple-600" : "" }} rounded-tr-lg rounded-br-lg"
        aria-hidden="true"
        ></span>

        <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ ($active === "pemilik") ? "dark:text-gray-100 " : "" }}"
        href="/pemilik"
        >
        <svg
            class="w-5 h-5"
            aria-hidden="true"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
        </svg>
        <span class="ml-4">Pemilik</span>
        </a>
    </li>
    <li class="relative px-6 py-3">
        <span
        class="absolute inset-y-0 left-0 w-1 {{ ($active === "pengelola") ? "bg-purple-600" : "" }} rounded-tr-lg rounded-br-lg"
        aria-hidden="true"
        ></span>

        <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ ($active === "pengelola") ? "dark:text-gray-100 " : "" }}"
        href="/pengelola"
        >
        <svg
            class="w-5 h-5"
            aria-hidden="true"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
        </svg>
        <span class="ml-4">Pengelola</span>
        </a>
    </li>
    <li class="relative px-6 py-3">
        <span
        class="absolute inset-y-0 left-0 w-1 {{ ($active === "riwayat iuran" || $active === "riwayat kepemilikan") ? "bg-purple-600" : "" }} rounded-tr-lg rounded-br-lg"
        aria-hidden="true"
        ></span>
        <button
        class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
        @click="togglePagesMenu"
        aria-haspopup="true"
        >
        <span class="inline-flex items-center {{ ($active === "riwayat iuran" || $active === "riwayat kepemilikan") ? "dark:text-gray-200" : "" }}">
            <svg
            class="w-5 h-5"
            aria-hidden="true"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
            >
            <path
                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
            ></path>
            </svg>
            <span class="ml-4">Transaksi</span>
        </span>
        <svg
            class="w-4 h-4"
            aria-hidden="true"
            fill="currentColor"
            viewBox="0 0 20 20"
        >
            <path
            fill-rule="evenodd"
            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
            clip-rule="evenodd"
            ></path>
        </svg>
        </button>
        <template x-if="isPagesMenuOpen">
        <ul
            x-transition:enter="transition-all ease-in-out duration-300"
            x-transition:enter-start="opacity-25 max-h-0"
            x-transition:enter-end="opacity-100 max-h-xl"
            x-transition:leave="transition-all ease-in-out duration-300"
            x-transition:leave-start="opacity-100 max-h-xl"
            x-transition:leave-end="opacity-0 max-h-0"
            class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
            aria-label="submenu"
        >
            <li
            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
            >
            <a class="w-full {{ ($active === "riwayat kepemilikan") ? "dark:text-gray-100 " : "" }}" href="/riwayat-kepemilikan">
                Riwayat Kepemilikan
            </a>
            </li>
            <li
            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
            >
            <a class="w-full {{ ($active === "riwayat iuran") ? "dark:text-gray-100 " : "" }}" href="/riwayat-iuran">
                Riwayat Iuran
            </a>
            </li>
        </ul>
        </template>
    </li>
    </ul>
    {{-- <div class="px-6 my-6">
    <button
        class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
    >
        Create account
        <span class="ml-2" aria-hidden="true">+</span>
    </button>
    </div> --}}
</div>
</aside>
