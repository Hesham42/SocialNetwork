<!DOCTYPE html>
    <html>
        <head>
        <title>@yield('title')</title>
    </head>

    <body>
        @include('include.header')
        <div class="container">
            @yield('content')
        </div>

    </body>

    </html>