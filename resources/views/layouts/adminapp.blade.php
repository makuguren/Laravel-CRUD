<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="custom_theme">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? '' }} | Dcoderz SMS</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assets/headicon.png') }}">
    </head>

    <body class="font-sans antialiased">

        {{-- The navbar with `sticky` and `full-width` --}}
        @include('layouts.admin-includes.navbar')

        {{-- The main content with `full-width` --}}
        <x-main with-nav full-width>

            {{-- This is a sidebar that works also as a drawer on small screens --}}
            {{-- Notice the `main-drawer` reference here --}}
            @include('layouts.admin-includes.sidebar')

            {{-- The `$slot` goes here --}}
            <x-slot:content>
                {{ $slot }}
            </x-slot:content>
        </x-main>

        {{--  TOAST area --}}
        <x-toast />
    </body>
</html>
