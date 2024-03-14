<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>SuperHeroes</title>
</head>
<body>
    <header>
        <!-- Aquí puedes agregar la barra de navegación u otros elementos comunes del encabezado -->
    </header>

    <main>
        <div class="m-5">
        @yield('content')
        </div>
    </main>

    <footer>
        <!-- Aquí puedes agregar el pie de página u otros elementos comunes del footer -->
    </footer>
</body>
</html>
