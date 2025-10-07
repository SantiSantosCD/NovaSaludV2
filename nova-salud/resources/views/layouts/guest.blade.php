<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'NovaSalud') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <img src="{{ asset('images/logofarmacia.png') }}" alt="Icono Nova Salud — farmacia"
                        style="width: 12rem;border: 1px solid #ccc; border-radius: 50%;" loading="lazy" />
                </a>
            </div>

            <div style="
  max-width: 28rem;
  margin-top: 1.5rem;
  padding: 1.5rem;
  background: linear-gradient(to bottom, #e0f7fa, #f1fcfd);
  border: 1px solid #b2ebf2;
  border-radius: 0.75rem;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
">
  {{ $slot }}
</div>
        </div>
    </body>
</html>
