<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" 
      x-init="$watch('darkMode', value => localStorage.setItem('darkMode', value)); 
        document.documentElement.classList.toggle('dark', darkMode)"
      :class="{ 'dark': darkMode }"

lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">


            <!-- Page Loader -->
                <div x-data="{ loading: true }" 
                x-init="setTimeout(() => loading = false, 200)" 
                x-show="loading" 
                class="fixed inset-0 flex items-center justify-center bg-gray-900 dark:bg-black z-50 transition-opacity duration-500"
                x-transition.opacity>

                            <!-- Spinner -->
                            <div class="w-16 h-16 border-4 border-gray-300 dark:border-gray-500 border-t-transparent rounded-full animate-spin"></div>
            
            
                </div>


    <div class="min-h-screen flex flex-col">
        <!-- Sticky Header -->
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow sticky top-0 z-50">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main class="flex-grow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>

        <!-- Sticky Footer -->
        <footer class="bg-white dark:bg-gray-800 shadow mt-auto">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 text-center text-gray-600 dark:text-gray-400">
                &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
            </div>
        </footer>
    </div>
</body>
</x-data=>