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

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <img src="img/preloader.svg" alt="">
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        @include('partials.app.header')
        @yield('content')
        @include('partials.app.footer')
        @include('partials.app.footer_link')
        
    </body>
</html>