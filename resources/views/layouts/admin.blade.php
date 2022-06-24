<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('images/netflix_logo.ico') }}" type="image/ico" />
        <title>@yield('title') | Netflix</title>
        @include('partials.admin.header_link')
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="{{ route('admin.dashboard') }}" class="site_title"><i class="fa fa-video-camera"></i> <span>Netflix</span></a>
                        </div>
                        @include('partials.admin.sidebar')
                    </div>
                </div>
                @include('partials.admin.header')
                @yield('content')
                @include('partials.admin.footer')
            </div>
        </div>
        @include('partials.admin.footer_link')
    </body>
</html>