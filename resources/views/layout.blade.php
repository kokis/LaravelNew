<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">

        @yield('header')
    </head>

    <body>
        @yield('content')

        @yield('footer')
    </body>
</html>