<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>School Admin Panel</title>
        <meta charset="utf-8">
        <meta name="description" content="School Admin Panel">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/plugins.bundle.css" type="text/css">
        <link rel="stylesheet" href="/css/style.bundle.css" type="text/css">
    </head>
    <body>
        {{-- CONTENT --}}
        @yield('main-content')

        {{-- Footer --}}
        @include('partials.footer')

        {{-- JS --}}
        <script src="/js/plugins.bundle.js"></script>
        <script src="/js/scripts.bundle.js"></script>
        @yield('jsIncludes')
    </body>
</html>
