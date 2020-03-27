<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="windows-1255">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#FFFFFF">
    <link rel="shortcut icon" href="{{asset('storage/icons/favicon.ico.ico')}}" type="image/x-icon">
    @yield('meta-description')
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('css')
</head>
<body>
    <main class="bg" style="background-image: url('{{asset('storage/background/bg-blue.jpg')}}');">
      <div class="container" id="app">
        @yield('content')
      </div>
    </main>
    <script src="{{mix('js/app.js')}}"></script>
    @include('partials.footer')
</body>
</html>
