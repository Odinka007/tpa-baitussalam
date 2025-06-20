<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
</head>

<body class="font-sans antialiased bg-blue-600 text-white">
    <div class="min-h-screen flex flex-col justify-center items-center py-6">

        <!-- Card Utama -->
        <div
            class="w-full sm:max-w-md px-6 py-6 bg-white border border-white shadow-lg rounded-lg text-gray-800 text-center">

            <!-- Judul Sistem -->
            <div class="mb-4">
                <h1 class="text-2xl sm:text-3xl font-bold tracking-wide">Sistem Informasi TPA Baitussalam</h1>
            </div>

            <!-- Logo -->
            <div class="mb-4">
                <a href="/">
                    <img src="{{ asset('image/BAITUSSALAM-HITAM.png') }}" alt="Logo TPA" class="w-20 h-20 mx-auto">
                </a>
            </div>


            <!-- Judul Login -->
            {{-- <div class="mb-4">
                <h2 class="text-xl sm:text-2xl font-semibold">LOGIN</h2>
            </div> --}}

            <!-- Form Login -->
            <div class="mt-4">
                {{ $slot }}
            </div>

        </div>
    </div>
</body>

</html>
