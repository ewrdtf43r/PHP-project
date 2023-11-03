<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @yield('styles') <!-- Вставка дополнительных стилей -->
</head>
<body>
    @yield('content')
    @yield('scripts') <!-- Вставка дополнительных скриптов -->
</body>
</html>