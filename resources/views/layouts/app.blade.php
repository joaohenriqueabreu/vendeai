<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('img/logo/logo-mini.png') }}">

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

<!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    @include('layouts.styles')
</head>
<body>
{{--<div id="app">--}}
<div id="wrapper" class="custom-background-black">
    {{--@include('layouts.header')--}}

    @include('layouts.sidebar')

    <div id="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">
                @yield('content')
            </div>
        </div>
    </div>
</div>


@include('layouts.footer')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

@include('layouts.scripts')
</body>
</html>
