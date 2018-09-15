<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="has-navbar-fixed-top">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <div class="content">
        {{-- @if(Auth::user()) --}}
            @include('navigation')
        {{-- @endif --}}
        @yield('form_start')
        @yield('content')
        @yield('form_end')
        @include('footer')
    </div>
</div>

<!-- Scripts -->
<script src="http://localhost:8098"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
