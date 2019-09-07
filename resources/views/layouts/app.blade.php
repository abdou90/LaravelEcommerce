<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('bootstrap-4/css/bootstrap.min.css') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

    @yield('styles')

</head>
<body>
    <div id="app">

        @include('normal.partials.navbar')


        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @include('normal.partials.footer')

        <!-- Scripts 
        <script src="{{ asset('js/app.js') }}" defer></script>

        -->

        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

<script src="{{ asset('bootstrap-4/js/bootstrap.min.js') }}"></script>

    @yield('scripts')
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
