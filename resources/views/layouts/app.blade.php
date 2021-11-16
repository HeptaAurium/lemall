<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>
    @include("back.layout.extras.css")
</head>

<body>
    @include('flash::message')
    @include('back.layout.navs.sidebar')
    <div id="app" class="app">
        @include('back.layout.navs.topbar')
        <main>
            @yield('content')
        </main>
    </div>
    @include("back.layout.extras.js")
</body>

</html>
