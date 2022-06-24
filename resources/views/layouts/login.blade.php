<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/netflix-icon.ico" type="image/ico" />
        <title>@yield('title') | Netflix</title>
        @include('partials.login.header_link')
    </head>
    <body class="login">
        @yield('content')
    </body>

</html>