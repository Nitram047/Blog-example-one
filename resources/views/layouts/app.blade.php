<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi BLOG')</title>

    {{-- CSS principal --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Pila para estilos adicionales --}}
    @stack('styles')
</head>
<body>

    {{-- Navbar (parcial) --}}
    @include('partials.navbar')

    {{-- Contenido dinámico de cada página --}}
    <main class="container">
        @yield('content')
    </main>

    {{-- Footer (parcial) --}}
    @include('partials.footer')

    {{-- JS principal --}}
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- Pila para scripts adicionales --}}
    @stack('scripts')
</body>
</html>