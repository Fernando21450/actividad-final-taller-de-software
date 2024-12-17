<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Gestión de Usuarios') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="{{ route('users.index') }}" class="text-xl font-bold text-blue-600">
                Gestión de Usuarios
            </a>
            <div>
                <a href="{{ route('users.index') }}" class="text-gray-800 hover:text-blue-600 mr-4">
                    Usuarios
                </a>
                <!-- Puedes agregar más enlaces de navegación aquí -->
            </div>
        </div>
    </nav>

    <main class="container mx-auto mt-8">
        @yield('content')
    </main>
</body>
</html>