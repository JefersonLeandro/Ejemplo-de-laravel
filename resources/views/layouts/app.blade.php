<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta  name="descripcion" content=" @yield("meta-description") ">
    <title>@yield('title')</title>
</head>
<body>
    @include('partials.navegacion')
    @yield('contenido')
</body>
</html>