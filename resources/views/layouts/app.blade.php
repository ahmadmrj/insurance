<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>