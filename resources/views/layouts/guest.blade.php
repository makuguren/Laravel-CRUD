<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title ?? '' }} | Techxplosion</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assets/headicon.png') }}">
    </head>
    <body class="flex justify-center items-center min-h-screen font-sans antialiased bg-base-200">
        <div class="w-full max-w-4xl shadow-xl card lg:card-side bg-base-100">
            <figure class="lg:w-1/2">
                <img src="{{ asset('assets/headicon.png') }}" alt="Random image" class="object-cover w-60 h-60" />
            </figure>

            {{ $slot }}
        </div>
    </body>
</html>
