<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('head.title')</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='/css/bootstrap.min.css' >
    <link rel="stylesheet" href='/css/app.css' >
</head>
<body>
    
    @include('partials.navbar')

    @yield('body.content')

    @section('sidebar')
        This is the master sidebar.
    @show

    <script src='/js/jquery.min.js'></script>
    <script src='/js/bootstrap.min.js'></script>
</body>
</html>
