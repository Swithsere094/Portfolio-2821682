<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        .active {
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>

    @include('partials.nav')

    @if (session('status'))
        {{ session('status') }}
    @endif

    @yield('content')
</body>
</html>