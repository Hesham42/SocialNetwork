<!DOCTYPE html>
    <html>
        <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
    </head>

    <body>
        @include('include.header')
        <div class="container">
            @yield('content')
        </div>

    </body>

    </html>