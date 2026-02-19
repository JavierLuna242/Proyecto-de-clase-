<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ProShop')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    @stack('head')
</head>

<body>
    @include('product.Layout.navbar')

    <main>
        @yield('content')
    </main>

    @include('product.Layout.footer')

    @stack('scripts')
</body>

</html>
