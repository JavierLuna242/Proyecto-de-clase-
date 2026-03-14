<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin - ProShop')</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Professional SaaS Style -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body class="admin-body">

    @include('admin.layout.navbar')

    <main class="admin-container">
        @yield('content')
    </main>

    <footer class="admin-footer">
        <p>&copy; 2026 ProShop Dashboard. Desarrollado con Laravel.</p>
    </footer>

</body>

</html>
