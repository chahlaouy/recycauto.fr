<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>

        <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>

        <!-- Styles -->
        <link 
            rel="stylesheet" 
            href="{{ asset('css/app.css') }}"
        />
        @livewireStyles

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />

    </head>
    <body class="antialiased bg-gray-100 text-gray-800">
        @if (Session::get('success'))    
            <x-custom.flash type="success">
                {{Session::get('success')}}
            </x-custom.flash>
        @endif
        @if (Session::get('error'))    
            <x-custom.flash type="error">
                {{Session::get('error')}}
            </x-custom.flash>
        @endif
        <div class="bg-custom-green">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                @yield('upperbar')
            </div>
        </div>
        <div class="">
            @auth
                @include('layouts.partials.main-navigation')   
            @else
                @include('layouts.partials.nav-guest')
            @endauth
        </div>
        <div>
            @yield('header')
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @yield('content')
        </div>

        <!-- Scripts -->
        @livewireScripts
         <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>