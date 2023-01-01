<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
 <head>
   @include('layouts.partials.head')
 </head>
 <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen}"
    >
    @include('layouts.partials.sidebar')
    <div class="flex flex-col flex-1 w-full">
        @include('layouts.partials.header')
        @include('components.alert-status')
        @yield('content')
    </div>

    @include('layouts.partials.footer')
    @include('layouts.partials.footer-scripts')
    </div>
 </body>
</html>
