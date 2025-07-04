<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

        <!-- Estilos personalizados navbar -->
        <style>
            .nav-link {
                transition: all 0.3s ease;
                padding: 0.3rem 0.75rem;
                border: none !important; 
                outline: none !important;
            }

            .nav-link:hover {
                background-color: rgba(255, 255, 255, 0.26);

            }

            .nav-link.active {
                background-color:rgba(208, 186, 126, 0.72);
                font-weight: bold;
                color: black !important;
            }

            .prologo
            {
                font-size: 20px;
                margin-top: 40px;    /* margen arriba */
                margin-bottom: 30px;
            }
        </style>
        
    </head>
    <body class="bg-light">
    <div class="min-vh-100">
        @include('layouts.navigation')

        @isset($header)
            <header class="bg-white shadow-sm">
                <div class="container py-4">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <main class="w-100">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
