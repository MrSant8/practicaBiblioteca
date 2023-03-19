<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <!-- Aquí puedes incluir cualquier hoja de estilo CSS que desees -->
</head>
<body>
    <!-- Aquí puedes incluir la barra de navegación -->
    @include('partials.navbar')

    <div class="container">
        <!-- Aquí se incluirá el contenido específico de cada página -->
        @yield('content')
    </div>

    <!-- Aquí puedes incluir el pie de página -->
    @include('partials.footer')

    <!-- Aquí puedes incluir cualquier script JS que desees -->
</body>
</html>
