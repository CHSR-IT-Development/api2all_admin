<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('layouts.head')

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!-- Styles -->
    @livewireStyles
</head>
<body class="app sidebar-mini light-mode dark-sidebar">
    <x-banner />
    <div id="global-loader">
        <img src="{{URL::asset('assets/images/svgs/loader.svg')}}" alt="loader">
    </div>
    <div class="min-h-screen bg-gray-100">
        <div class="page-main">
            @include('layouts.side-menu')
            <div class="app-content main-content">
                <div class="side-app">
                    @include('layouts.header')
                    @yield('page-header')
                    {{ $slot }}
                </div>
            </div>
        </div>


    </div>

    @stack('modals')

    @livewireScripts
    @include('layouts.footer-scripts')
</body>
</html>
