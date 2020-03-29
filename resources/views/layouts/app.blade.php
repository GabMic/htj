<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="windows-1255">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#FFFFFF">
    <link rel="shortcut icon" href="{{asset('storage/icons/favicon.ico')}}" type="image/x-icon">
    @yield('meta-description')
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('css')
</head>
<body>
<div class="container">
    <main id="app">
        @include('partials.navbar')
        @yield('content')
        <flash message="{{session('flash')}}"></flash>
    </main>
</div>
@include('partials.footer')
<script src="{{mix('js/app.js')}}"></script>
@yield('js')
</body>
</html>
