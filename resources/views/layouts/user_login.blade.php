<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') | Netflix</title>
        <link rel="icon" href="{{ asset('images/netflix_logo.ico') }}" type="image/ico" />
        <!-- Place favicon.ico in the root directory -->

        @include('partials.app.header_link')
    </head>
    <body>
        @yield('content')
        @include('partials.app.footer_link')
    </body>
</html>