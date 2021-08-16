<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') | {{ config('app.name', 'Laravel') }}</title>
    @include('front.layout.extras.css')
</head>

<body>
    <main>
        @yield('content')
    </main>
    </div>

    @include('front.layout.extras.js')
</body>

</html>
